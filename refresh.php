<?php
#require_once 'classes/iCalcreator.class.php';

ini_set("log_errors", true);
ini_set("error_reporting", E_ALL);

define("INPUT_RSS_CONSIDERED",      "http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss&FeedLength=7");
define("INPUT_RSS_FLICKR",          "http://api.flickr.com/services/feeds/photos_public.gne?tags=publishneilcrosbycom&lang=en-us&format=rss_200");
define("INPUT_RSS_CONSCIOUSNESS",   "http://pipes.yahoo.com/pipes/pipe.run?_id=f41d64550e674b7f01bad0f3c49d46f8&_render=rss&FeedLength=20");
define("INPUT_RSS_OTHERS_SAID",     "http://pipes.yahoo.com/pipes/pipe.run?_id=ygKh4Siu3BGqyNyQJphxuA&_render=rss&FeedLength=30");
define("INPUT_RSS_EVENTS",          "http://pipes.yahoo.com/pipes/pipe.run?_id=9h81k_pR3hGH5QGoPm7D0g&_render=rss");
define("INPUT_EVENTS",              "http://lanyrd.com/profile/neilcrosby/past/attending/");
define("FILE_TEMPLATE",             "/templates/index.tpl");
define("FILE_OUTPUT",               "/index.html");
define("TEN_WORD_USER",             "workingwithme");
define("TWITTER_USERNAME",          "NeilCrosby");

date_default_timezone_set('UTC');

function __autoload($class_name) {
    require_once $class_name . '.php';
}



$flickr     = getHtmlForStream('flickr',        INPUT_RSS_FLICKR,           7);
$considered = getHtmlForStream('considered',    INPUT_RSS_CONSIDERED,       5);
$stream     = '';//getHtmlForStream('consciousness', INPUT_RSS_CONSCIOUSNESS,    20);
$others     = '';//getHtmlForStream('otherssaid',    INPUT_RSS_OTHERS_SAID,      30);
$events     = getEvents();

if ( !$flickr || !$considered ) {
    error_log("some data didn't return");
    return;
}

mb_internal_encoding("UTF-8");

$template = getTemplate();

$template = str_replace( array('##flickr##', '##consideredthoughts##', '##streamofconsciousness##', '##otherssaid##', '###events###'),
                         array($flickr, $considered, $stream, $others, $events),
                         $template );
saveOutput($template);

$server = ( 80 == $_SERVER['SERVER_PORT'])
        ? $_SERVER['SERVER_NAME']
        : $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];

if (!isset($_GET['no_redirect'])) {
    header("Location: http://$server/");
}

exit();


function getTemplate() {
    return file_get_contents($_SERVER['DOCUMENT_ROOT'].FILE_TEMPLATE);
}

function saveOutput( $template ) {
    return file_put_contents($_SERVER['DOCUMENT_ROOT'].FILE_OUTPUT, $template);
}

function getEvents() {

    $data = getDataFromHtml( INPUT_EVENTS );

    $xpath = new DOMXPath($data);
    $items = $xpath->query("//div[contains(@class, 'conference-listing')]/ol/li[position() <= 3]/h4/a");
    
    if ( 0 === count($items) ) {
        return '';
    }
    
    $output = '<p>You may also remember me from such events as ';
    
    $numItems  = $items->length;
    $doneItems = 0;
    for ( $i = $numItems - 1; $i >= 0; $i-- ) {
        $item = $items->item($i);
        
        $doneItems++;
        
        $joiner = '.';
        if ($doneItems < $numItems - 1) {
            $joiner = ', ';
        } else if ($doneItems < $numItems) {
            $joiner = ' and ';
        }
        
        $text = $item->nodeValue;
        $url  = $item->attributes->getNamedItem('href')->nodeValue;

        $output .= "<a href='http://lanyrd.com{$url}'>{$text}</a>{$joiner}";
    }
    $output .= '</p>';

    return $output;
}

function getHtmlForStream($stream, $url, $maxItems = 100) {
    $data = getDataFromFeed( $url );

    $backlog = array();
    $output = '';
    $numItems = 0;
    foreach ( $data->channel->item as $item ) {
        if ($numItems >= $maxItems) {
            continue;
        }
        $output .= getHtmlForEntry($item, $stream, $backlog, !((bool)$numItems));
        $numItems++;
    }
    
    if ( sizeof($backlog) > 0) {
        $output .= getHtmlForEntry($item, $stream, $backlog);
    }
    
    if ( '' == $output ) {
        error_log('returning early');
        return $output;
    }

    return "<ol>$output</ol>";
}

function getDataFromFeed( $url ) {
    $urlHash = md5($url);
    $ignoreCache = isset($_GET['ignore_cache']);
    
    $data = apc_fetch($urlHash);
    if (!$data || $ignoreCache) {
        error_log('CACHE MISS: '.$url);

        $data = file_get_contents( $url."&rand=".time() );

        apc_store($urlHash, $data, 600);
    }
    
    $data = simplexml_load_string( $data );
    return $data;
}

function getDataFromHtml( $url ) {
    $data = apc_fetch($url);
    if (!$data) {
        error_log('CACHE MISS: '.$url);

        $data = file_get_contents( $url );

        apc_store($url, $data, 600);
    }
    
    $doc = new DomDocument();
    @$doc->loadHtml( $data );
    
    return $doc;
}

function getHtmlForEntry( $item, $stream='considered', &$backlog = array(), $isFirst = false ) {
    $item->pubDate = date('l jS F Y, H:i', strtotime($item->pubDate));

    $html = '';
    if ( sizeof( $backlog ) > 0 && !preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {

        $html = getHtmlForEntryFlickrThumbnail($backlog, $stream);
        $backlog = array();
    }

    if ( preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {

        if ( 'flickr' == $stream || 'considered' == $stream || 'consciousness' == $stream ) {
            return getHtmlForEntryFlickr($item, $stream, $isFirst);
        } else {
            $backlog[] = $item;
            return '';
        }

    } else if ( preg_match( '/^del\.icio\.us link:\s*/', $item->title ) ) {
        return $html.getHtmlForEntryDelicious($item);
    } else if ( preg_match( '/^http:\/\/thetenwordreview\.com/', $item->link ) ) {
        return $html.getHtmlForEntryTheTenWordReview($item);
    } else if ( preg_match( '/^http:\/\/www\.amazon\.co\.uk/', $item->link ) ) {
        return $html.getHtmlForEntryAmazon($item);
    } else if ( preg_match( '/^http:\/\/www\.slideshare\.net/', $item->link ) ) {
        return $html.getHtmlForEntrySlideshare($item);
    } else if ( preg_match( '/^http:\/\/www\.last\.fm/', $item->link ) ) {
        return $html.getHtmlForEntryLastFm($item);
    } else if ( preg_match( '/^http:\/\/twitter\.com/', $item->link ) ) {
        return $html.getHtmlForEntryTwitter($item);
    } else if ( preg_match( '/^http:\/\/upcoming\.yahoo\.com/', $item->link ) ) {
        return $html.getHtmlForEntryUpcoming($item);
    } else if ( preg_match( '/^http:\/\/github\.com/', $item->link ) ) {
        return $html.getHtmlForEntryGithub($item);
    } else if ( preg_match( '/IWearCotton/', $item->link ) ) {
        return $html.getHtmlForEntryIWearCotton($item);
    }

    $maxDescLen = ('considered' == $stream) ? 500: 100;
    
    $description = strip_tags($item->description);
    if ( mb_strlen($description) > $maxDescLen ) {
        $description = mb_substr( $description, 0, $maxDescLen, "UTF-8" ).'&hellip;';
    }
  
    return $html.<<<HTML
        <li class='module'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$item->title}</a></h3>
            </div>
            <div class='bd'>
                {$description}
            </div>
            <div class='ft'>
                <p>$item->pubDate</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryIWearCotton( $item ) {
    $doc = new DOMDocument();
    // have to give charset otherwise loadHTML gets confused
    $doc->loadHTML(
        '<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head><body>'.
        $item->description.
        '</body></html>'
    );
    $xpath = new DOMXPath($doc);
    $imgs = $xpath->query('//img');
    
    $imgNode = ($imgs->length > 0) ? $imgs->item(0) : '';
    
    $img = "<img";
    foreach ($imgNode->attributes as $attrName => $attrNode) {
        $img .= " $attrName='{$attrNode->value}'";
    }
    $img .= ">";
    
    $description = strip_tags($item->description);

    return <<<HTML
        <li class='module iwearcotton'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$item->title}</a></h3>
            </div>
            <div class='bd'>
                {$img}
                {$description}
            </div>
            <div class='ft'>
                <p>$item->pubDate</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryFlickr( $item, $stream, $isFirst=false ) {
    $maxWidth = 469;
    $maxHeight = 469;
    
    $class = ($isFirst) ? ' first' : ' flickr_secondary';
    $item = makeSafeForHtml($item);
    
    $title = $item['title'];
    $description = $item->description;

    if ( 'consciousness' == $stream ) {
        $title = 'flickr fave: '.$title;
        $maxWidth = 75 * 3;
        $maxHeight = 240;
    }

    if ( !$isFirst ) {
        $maxWidth = 230;
        $maxHeight = 160;
    }

    preg_match( '/(http:\/\/farm\d+\.static\.?flickr\.com\/\d+\/[^.]*)_m.jpg" width="(\d+)" height="(\d+)/', $description, $matches);
    if ( $matches ) {
        $width = $matches[2];
        $height = $matches[3];
        
            $height = (int)(($maxWidth / $width) * $height);
            $width  = (int)($maxWidth);

            if ($height > $maxHeight) {
                $width = (int)(($maxHeight / $height) * $width);
                $height = (int)($maxHeight);
            }
        
        $img_url = "{$matches[1]}.jpg";
        if ( 'consciousness' == $stream ) {
            $img_url = "{$matches[1]}_m.jpg";
        }

        if ( !$isFirst ) {
            $img_url = "{$matches[1]}_m.jpg";
        }

        $description = "<p><a href='{$item['link']}'><img src='{$img_url}' width='{$width}' height='{$height}' alt='{$item['title']}'></a></p>";
    }
    
    
    return <<<HTML
        <li class='module flickr{$class}'>
            <div class='hd'>
                <h3><a href='{$item['link']}'>{$title}</a></h3>
            </div>
            <div class='bd'>
                {$description}
            </div>
            <div class='ft'>
                <p>{$item['pubDate']}</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntrySlideshare( $item ) {
    preg_match('/id="__ss_(\d+)"/', $item->description, $matches);
    $id = $matches[1];
    
    return <<<HTML
        <li class='module slideshare'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$item->title}</a></h3>
            </div>
            <div class='bd'>
                <iframe src="http://www.slideshare.net/slideshow/embed_code/${id}" width="469" height="392" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
            </div>
            <div class='ft'>
                <p>{$item->pubDate}</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryFlickrThumbnail( $items, $stream ) {
    $output = '';
    foreach ( $items as $item ) {
        $title = $item->title;

        $description = $item->description;
        if (preg_match( '/(http:\/\/farm\d+\.static\.flickr\.com\/\d+\/[^.]*)_m.jpg/', $item->description, $matches) ) {
            $item = makeSafeForHtml($item);
            
            $width = 75;
            $img_url = "{$matches[1]}_s.jpg";
            
            $description = "<a href='{$item->link}'><img src='{$img_url}' width='{$width}' alt='{$item['title']}'></a>";
        }


        $output .= "<li>{$description}</li>";
    }

    return <<<HTML
        <li class='module flickr'>
            <div class='hd'>
                <h3>Flickr</h3>
            </div>
            <div class='bd'>
                <ol>$output</ol>
            </div>
            <div class='ft'>
                <p>{$item->pubDate}</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryTheTenWordReview( $item ) {
    
    $tenWordColors = array( 
        '000000',
        '8c288b', 
        'f6821f',
        '87c80a',
        '00adef',
        '000000',
        '8c288b', 
        'f6821f',
        '87c80a',
        '00adef',
    );
    
    $description = (string) $item->description;
    $description = simplexml_load_string( "<?xml version='1.0'?><description>$description</description>" );

    $tenWordCount = mb_substr( number_format( hexdec( md5( $description->p[0] ) ) ), -1);
    
    preg_match('/^(.*) by /', $item->title, $matches);
    $title = ($matches) ? $matches[1] : $item->title;
    
    $user = TEN_WORD_USER;

    return <<<HTML
        <li class='module thetenwordreview' style='background-color: #{$tenWordColors[$tenWordCount]}'>
            <div class='hd'>
                <h3><a href='{$item->link}'>$title</a></h3>
            </div>
            <div class='bd'>
                {$description->p[0]}
                <p class='icon'><a href='http://thetenwordreview.com/users/{$user}'><img src='http://thetenwordreview.com/images/icons/{$user}.png' alt='{$user}&#039;s icon'></a></p>
            </div>
            <div class='ft'>
                <p>{$item->pubDate}</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryGithub( $item ) {
    $maxDescLen = ('considered' == $stream) ? 500: 100;

    $title       = strip_tags($item->title);
    $description = strip_tags($item->description);

    $pointer = "started ";
    $pos = mb_strpos($title, $pointer);
    if ( FALSE !== $pos ) {
        $title = mb_substr($title, $pos + mb_strlen($pointer));
        $title = str_replace('/', ' / ', $title);
    }
    
    $pointer = "'s description:";
    $pos = mb_strpos($description, $pointer);
    if ( FALSE !== $pos ) {
        $description = mb_substr($description, $pos + mb_strlen($pointer));
    }
    if ( mb_strlen($description) > $maxDescLen ) {
        $description = mb_substr( $description, 0, $maxDescLen, "UTF-8" ).'&hellip;';
    }

    return $html.<<<HTML
        <li class='module github'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$title}</a></h3>
            </div>
            <div class='bd'>
                {$description}
            </div>
            <div class='ft'>
                <p>$item->pubDate</p>
            </div>
        </li>
HTML;
}

function getHtmlForEntryDelicious( $item ) {
    $maxDescriptionLength = 70;

    $description = $item->description;
    if ( mb_strlen($description) > $maxDescriptionLength ) {
        $description = mb_substr( $description, 0, $maxDescriptionLength) . '&hellip;';
    }
    
    preg_match( '/^del\.icio\.us link:\s*(.*)/', $item->title, $matches);

    $item = makeSafeForHtml($item);

    return <<<HTML
        <li class='module delicious'>
            <div class='hd'>
                <h3><a href='{$item['link']}'>{$matches[1]}</a></h3>
            </div>
            <div class='bd'>
                <p>$description</p>
            </div>
            <div class='ft'>
                <p>{$item['pubDate']}</p>
            </div>
        </li>
HTML;
}

function makeSafeForHtml($item) {
    if (is_array($item)) {
        foreach ( $item as $key=>$value ) {
            $item[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8');
        }
        return $item;
        
    } else if (is_object($item)) {
        foreach ( $item as $key=>$value ) {
            $item[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8');
        }
        return $item;
        
    }
    
    return htmlentities($item, ENT_QUOTES, 'UTF-8');
}

?>
