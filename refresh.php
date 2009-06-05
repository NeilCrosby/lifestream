<?php

define("INPUT_RSS_CONSIDERED",      "http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss");
define("INPUT_RSS_CONSCIOUSNESS",   "http://pipes.yahoo.com/pipes/pipe.run?_id=f41d64550e674b7f01bad0f3c49d46f8&_render=rss");
define("INPUT_RSS_OTHERS_SAID",     "http://pipes.yahoo.com/pipes/pipe.run?_id=ygKh4Siu3BGqyNyQJphxuA&_render=rss");
define("INPUT_RSS_EVENTS",          "http://pipes.yahoo.com/pipes/pipe.run?_id=9h81k_pR3hGH5QGoPm7D0g&_render=rss");
define("FILE_TEMPLATE",             "/templates/index.tpl");
define("FILE_OUTPUT",               "/index.html");
define("TEN_WORD_USER",             "workingwithme");
define("TWITTER_USERNAME",          "NeilCrosby");

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$considered = getConsideredThoughts();
$stream = getStreamOfConsciousness();
$others = getOthersSaid();
$events = getEvents();

if ( !$considered || !$stream || !$others ) {
    return;
}

mb_internal_encoding("UTF-8");

$template = getTemplate();

$template = str_replace( array('##consideredthoughts##', '##streamofconsciousness##', '##otherssaid##', '###events###'),
                         array($considered, $stream, $others, $events),
                         $template );
saveOutput($template);

$server = ( 80 == $_SERVER['SERVER_PORT'])
        ? $_SERVER['SERVER_NAME']
        : $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];

header("Location: http://$server/");


function getTemplate() {
    return file_get_contents($_SERVER['DOCUMENT_ROOT'].FILE_TEMPLATE);
}

function saveOutput( $template ) {
    return file_put_contents($_SERVER['DOCUMENT_ROOT'].FILE_OUTPUT, $template);
}


function getConsideredThoughts() {
    $rand = "&rand=".time();

    return getHtmlForStream('considered', INPUT_RSS_CONSIDERED.$rand);
}

function getStreamOfConsciousness() {
    $rand = "&rand=".time();

    return getHtmlForStream('consciousness', INPUT_RSS_CONSCIOUSNESS.$rand);
}

function getOthersSaid() {
    $rand = "&rand=".time();
    $rand = ""; // because pipes isn't happy with me breaking caching

    return getHtmlForStream('otherssaid', INPUT_RSS_OTHERS_SAID.$rand);
}

function getEvents() {
    $rand = "&rand=".time();
    $data = getDataFromFeed( INPUT_RSS_EVENTS.$rand );

    $items = array();
    foreach ( $data->channel->item as $item ) {
        $items[] = $item;
    }
    
    if ( 0 === count($items) ) {
        return '';
    }
    
    $items = array_reverse($items);
    
    $output = '<p>You may remember me from such events as ';

    $numItems = count($items);
    $doneItems = 0;
    foreach ($items as $item) {
        $doneItems++;
        
        $joiner = '.';
        if ($doneItems < $numItems - 1) {
            $joiner = ', ';
        } else if ($doneItems < $numItems) {
            $joiner = ' and ';
        }

        $output .= "<a href='{$item->link}'>{$item->title}</a>{$joiner}";
    }
    $output .= '</p>';

    return $output;
}

function getHtmlForStream($stream, $url) {
    $data = getDataFromFeed( $url );

    $backlog = array();
    $output = '';
    foreach ( $data->channel->item as $item ) {
        $output .= getHtmlForEntry($item, $stream, &$backlog);
    }
    
    if ( sizeof($backlog) > 0) {
        $output .= getHtmlForEntry($item, $stream, &$backlog);
    }
    
    if ( '' == $output ) {
        return $output;
    }

    return "<ol>$output</ol>";
}

function getDataFromFeed( $url ) {
    $data = simplexml_load_file( $url );

    return $data;
}

function getHtmlForEntry( $item, $stream='considered', $backlog = array() ) {
    $item->pubDate = date('l jS F Y, H:i', strtotime($item->pubDate));

    $html = '';
    if ( sizeof( $backlog ) > 0 && !preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {

        $html = getHtmlForEntryFlickrThumbnail($backlog, $stream);
        $backlog = array();
    }

    if ( preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {

        if ( 'considered' == $stream || 'consciousness' == $stream ) {
            return getHtmlForEntryFlickr($item, $stream);
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

function getHtmlForEntryAmazon( $item ) {
    $description = $item->description;
    $description = str_replace('&', '&amp;', $description);
    
    $item = makeSafeForHtml($item);
    return <<<HTML
        <li class='module amazon'>
            <div class='hd'>
                <h3><a href='{$item['link']}'>{$item['title']}</a></h3>
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

function getHtmlForEntryUpcoming( $item ) {
    $pos = strpos( $item->description, '<br />' );
    if ( false !== $pos ) {
        $item->description = mb_substr( $item->description, 0, $pos );
    }

    $item->description = strip_tags($item->description);
    
    $maxDescriptionLength = 70;

    $description = $item->description;
    if ( mb_strlen($description) > $maxDescriptionLength ) {
        $description = mb_substr( $description, 0, $maxDescriptionLength) . '&hellip;';
    }
    
    $pos = strpos( $item->title, ':' );
    if ( false !== $pos ) {
        $date = mb_substr( $item->title, 0, $pos );
        $item->title = mb_substr( $item->title, $pos + 2 );

        preg_match( '/(\w+)\s+(\d+),\s+(\d+)/', $date, $matches );
        $month = $matches[1];
        $day   = $matches[2];
        $year  = $matches[3];
    }
    
    $maxTitleLength = 23;

    $title = $item->title;
    if ( mb_strlen($title) > $maxTitleLength ) {
        $title = mb_substr( $title, 0, $maxTitleLength) . '&hellip;';
    }
    
    return <<<HTML
        <li class='module upcoming'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$title}</a></h3>
            </div>
            <div class='bd'>
                <p class='date'><span>{$month} {$year}</span>{$day}</p>
                <p>{$description}</p>
            </div>
            <div class='ft'>
                <p>{$item->pubDate}</p>
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

function getHtmlForEntryFlickr( $item, $stream ) {
    $maxWidth = 469;
    $maxHeight = 469;
    
    $item = makeSafeForHtml($item);
    
    $title = $item['title'];
    $description = $item->description;

    if ( 'consciousness' == $stream ) {
        $title = 'flickr fave: '.$title;
        $maxWidth = 75 * 3;
        $maxHeight = 240;
    }

    preg_match( '/(http:\/\/farm\d+\.static\.flickr\.com\/\d+\/[^.]*)_m.jpg" width="(\d+)" height="(\d+)/', $description, $matches);
    if ( $matches ) {
        $width = $matches[2];
        $height = $matches[3];
        
            $height = ($maxWidth / $width) * $height;
            $width  = $maxWidth;

            if ($height > $maxHeight) {
                $width = ($maxHeight / $height) * $width;
                $height = $maxHeight;
            }
        
        $img_url = "{$matches[1]}.jpg";
        if ( 'consciousness' == $stream ) {
            $img_url = "{$matches[1]}_m.jpg";
        }

        $description = "<p><a href='{$item['link']}'><img src='{$img_url}' width='{$width}' height='{$height}' alt='{$item['title']}'></a></p>";
    }
    
    
    return <<<HTML
        <li class='module flickr'>
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
    preg_match('/(<iframe.*<\/iframe>)/', $item->description, $matches);
    $description = str_replace('width="425"', 'width="469"', $matches[0]);
    $description = str_replace('height="355"', 'height="392"', $description);
    $description = str_replace('&', '&amp;', $description);
    
    return <<<HTML
        <li class='module slideshare'>
            <div class='hd'>
                <h3><a href='{$item->link}'>{$item->title}</a></h3>
            </div>
            <div class='bd'>
                {$description}
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

function getHtmlForEntryLastFm( $item ) {
    return <<<HTML
        <li class='module lastfm'>
            <div class='hd'>
                <h3><span>Last.fm: </span><a href='{$item->link}'>{$item->title}</a></h3>
            </div>
            <div class='bd'>
                <p>{$item->pubDate}</p>
            </div>
            <div class='ft'>
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

function getHtmlForEntryTwitter( $item ) {
    $description = strip_tags($item->description);
    $class = '';
    if ( TWITTER_USERNAME != mb_substr($item->author[0], 0, mb_strlen(TWITTER_USERNAME)) && TWITTER_USERNAME != mb_substr($description, 0, mb_strlen(TWITTER_USERNAME)) ) {
        $author = $item->author[0];
        preg_match('/(^[^\s]+)/', $author, $matches);
        $description = $matches[1] . ': ' . $description;
        $class=' twitter_at_user';
    }
    
    return <<<HTML
        <li class='module twitter$class'>
            <div class='hd'>
                <h3><a href='{$item->link}'>Twitter</a></h3>
            </div>
            <div class='bd'>
                <p><a href='{$item->link}'>{$description}</a></p>
            </div>
            <div class='ft'>
                <p>{$item->pubDate}</p>
            </div>
        </li>
HTML;
}

function makeSafeForHtml($item) {
    if (is_array($item)) {
        foreach ( $item as $key=>$value ) {
            $item[$key] = htmlentities($value, ENT_QUOTES);
        }
        return $item;
        
    } else if (is_object($item)) {
        foreach ( $item as $key=>$value ) {
            $item[$key] = htmlentities($value, ENT_QUOTES);
        }
        return $item;
        
    }
    
    return htmlentities($item, ENT_QUOTES);
}

?>