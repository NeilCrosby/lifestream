<?php

function __autoload($class_name) {
  require_once $class_name . '.php';
}

$considered = getConsideredThoughts();
$stream = getStreamOfConsciousness();
$others = getOthersSaid();

if ( !$considered || !$stream || !$others ) {
  return;
}

$template = getTemplate();

$template = str_replace( array('##consideredthoughts##', '##streamofconsciousness##', '##otherssaid##'),
                         array($considered, $stream, $others),
                         $template );

saveOutput($template);

$server = ( 80 == $_SERVER['SERVER_PORT'])
        ? $_SERVER['SERVER_NAME']
        : $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];

header("Location: http://$server/");


function getTemplate() {
  return file_get_contents($_SERVER['DOCUMENT_ROOT'].'/templates/index.tpl');
}

function saveOutput( $template ) {
  return file_put_contents($_SERVER['DOCUMENT_ROOT'].'/index.html', $template);
}


function getConsideredThoughts() {
  // key and cache length (in seconds)
  $rand = "&rand=".time();
	$data = getDataFromFeed( "http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss$rand" );

	$output = "<ol>";
	foreach ( $data->channel->item as $item ) {
		$output .= getHtmlForEntry($item, 'considered');
	}
	$output .= "</ol>";
  
	return $output;
}

function getStreamOfConsciousness() {
  $rand = "&rand=".time();
	$data = getDataFromFeed( "http://pipes.yahoo.com/pipes/pipe.run?_id=f41d64550e674b7f01bad0f3c49d46f8&_render=rss$rand" );

	$backlog = array();
	$output = "<ol>";
	foreach ( $data->channel->item as $item ) {
		$output .= getHtmlForEntry($item, 'consciousness', &$backlog);
	}
	
	if ( sizeof($backlog) > 0) {
		$output .= getHtmlForEntry($item, 'consciousness', &$backlog);
	}
	
	$output .= "</ol>";
  
	return $output;
}

function getOthersSaid() {
  $rand = "&rand=".time();
	$rand = ""; // because pipes isn't happy with me breaking caching
	$data = getDataFromFeed( "http://pipes.yahoo.com/pipes/pipe.run?_id=ygKh4Siu3BGqyNyQJphxuA&_render=rss$rand" );

  $backlog = array();
	$output = "<ol>";
	foreach ( $data->channel->item as $item ) {
		$output .= getHtmlForEntry($item, 'otherssaid', &$backlog);
	}
	
	if ( sizeof($backlog) > 0) {
		$output .= getHtmlForEntry($item, 'otherssaid', &$backlog);
	}
	$output .= "</ol>";
  
	return $output;
}

function getDataFromFeed( $url ) {
  $data = simplexml_load_file( $url );
	
//	echo ($data) ? "<p>$url loaded data correctly</p>" : "<p>Bad data from $url</p>";
//	print_r($data);
	
	return $data;
}

function getHtmlForEntry( $item, $stream='considered', $backlog = array() ) {
  $html = '';
  if ( sizeof( $backlog ) > 0 && !preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {

    $html = getHtmlForEntryFlickrThumbnail($backlog, $stream);
    $backlog = array();
  }
    
  if ( preg_match( '/^http:\/\/www\.flickr\.com/', $item->link ) ) {
    
    if ( 'considered' == $stream ) {
      return getHtmlForEntryFlickr($item);
    } else {
      $backlog[] = $item;
      return '';
    }

  } else if ( preg_match( '/^del\.icio\.us link:\s*/', $item->title ) ) {
    return $html.getHtmlForEntryDelicious($item);
  } else if ( preg_match( '/^http:\/\/thetenwordreview\.com/', $item->link ) ) {
    return $html.getHtmlForEntryTheTenWordReview($item);
  } else if ( preg_match( '/^http:\/\/www\.last\.fm/', $item->link ) ) {
    return $html.getHtmlForEntryLastFm($item);
  } else if ( preg_match( '/^http:\/\/twitter\.com/', $item->link ) ) {
    return $html.getHtmlForEntryTwitter($item);
  } else if ( preg_match( '/^http:\/\/upcoming\.yahoo\.com/', $item->link ) ) {
    return $html.getHtmlForEntryUpcoming($item);
  }
  
	return $html."
		<li class='module'>
		  <div>
		    <div class='hd'>
			    <h3><a href='{$item->link}'>{$item->title}</a></h3>
			  </div>
			  <div class='bd'>
			    {$item->description}
			  </div>
			  <div class='ft'>
			    <p>$item->pubDate</p>
			  </div>
			</div>
		</li>";
}

function getHtmlForEntryUpcoming( $item ) {
	$pos = strpos( $item->description, '<br />' );
	if ( false !== $pos ) {
	  $item->description = substr( $item->description, 0, $pos );
	}
	
	$pos = strpos( $item->title, ':' );
	if ( false !== $pos ) {
	  $date = substr( $item->title, 0, $pos );
	  $item->title = substr( $item->title, $pos + 2 );
	  
	  preg_match( '/(\w+)\s+(\d+),\s+(\d+)/', $date, $matches );
	  $month = $matches[1];
	  $day   = $matches[2];
	  $year  = $matches[3];
	}
	
	return "
		<li class='module upcoming'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='{$item->link}'>{$item->title}</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p class='date'><span>{$month} {$year}</span>{$day}</p>
  		    <p>{$item->description}</p>
  		  </div>
			  <div class='ft'>
			    <p>{$item->pubDate}</p>
        </div>
      </div>
		</li>";
}

function getHtmlForEntryFlickr( $item ) {
	$description = $item->description;
	preg_match( '/(http:\/\/farm\d+\.static\.flickr\.com\/\d+\/[^.]*)_m.jpg" width="(\d+)" height="(\d+)/', $description, $matches);
	
	if ( $matches ) {
		$width = $matches[2];
		$height = $matches[3];
		
		$maxWidth = 469;
		$maxHeight = 469;
		
		//if ( $width > $height) {
			$height = ($maxWidth / $width) * $height;
			$width  = $maxWidth;
		//} else {
		//	$width  = ($maxHeight / $height) * $width;
		//	$height = $maxHeight;
		//}
		
		$description = "<p><a href='{$item->link}'><img src='{$matches[1]}.jpg' width='{$width}' height='{$height}' alt='{$item->title}'></a></p>";
	}
	
	return "
		<li class='module flickr'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='{$item->link}'>{$item->title}</a></h3>
  		  </div>
  		  <div class='bd'>
		    	{$description}
  		  </div>
			  <div class='ft'>
	    		<p>{$item->pubDate}</p>
        </div>
      </div>
		</li>";
}

function getHtmlForEntryFlickrThumbnail( $items, $stream ) {
  $output = '';
  foreach ( $items as $item ) {
    $title = $item->title;
    if ( 'consciousness' == $stream ) {
      $title = 'flickr favourite: '.$title;
    }
  
    $description = $item->description;
  	//$item->description = preg_replace( '/(http:\/\/farm\d+\.static\.flickr\.com\/\d+\/[^.]*)_m.jpg" width="\d+" height="\d+/', '$1_t.jpg', $item->description);
  	if (preg_match( '/(http:\/\/farm\d+\.static\.flickr\.com\/\d+\/[^.]*)_m.jpg/', $item->description, $matches) ) {
  	  $description = "<a href='{$item->link}'><img src='{$matches[1]}_s.jpg' alt='$title'></a>";
  	}
  
	
  	$output .= "<li>{$description}</li>";
  }
  
  return "
    <li class='module flickr'>
  	  <div>
  		  <div class='hd'>
  		    <h3>Flickr</h3>
  		  </div>
  		  <div class='bd'>
  	    	<ol>$output</ol>
  		  </div>
  		  <div class='ft'>
      		<p>{$item->pubDate}</p>
        </div>
      </div>
  	</li>";
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

	$tenWordCount = substr( number_format( hexdec( md5( $description->p[0] ) ) ), -1);
	
	preg_match('/^(.*) by /', $item->title, $matches);
	$title = ($matches) ? $matches[1] : $item->title;

	return "
		<li class='module thetenwordreview' style='background-color: #{$tenWordColors[$tenWordCount]}'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='{$item->link}'>$title</a></h3>
  		  </div>
  		  <div class='bd'>
		    	{$description->p[0]}
					<p class='icon'><a href='http://thetenwordreview.com/users/workingwithme'><img src='http://thetenwordreview.com/images/icons/workingwithme.png' alt='workingwithme&apos;s icon'></a></p>
  		  </div>
			  <div class='ft'>
	    		<p>{$item->pubDate}</p>
        </div>
      </div>
		</li>";
}

function getHtmlForEntryLastFm( $item ) {
	return "
		<li class='module lastfm'>
		  <div>
  		  <div class='hd'>
  		    <h3><span>Last.fm: </span><a href='{$item->link}'>{$item->title}</a></h3>
  		  </div>
  		  <div class='bd'>
		    	<p>{$item->pubDate}</p>
  		  </div>
			  <div class='ft'>
        </div>
      </div>
		</li>";
}

function getHtmlForEntryDelicious( $item ) {
	preg_match( '/^del\.icio\.us link:\s*(.*)/', $item->title, $matches);
	
	return "
		<li class='module delicious'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='{$item->link}'>{$matches[1]}</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p>{$item->description}</p>
  		  </div>
			  <div class='ft'>
			    <p>{$item->pubDate}</p>
        </div>
      </div>
		</li>";
}

function getHtmlForEntryTwitter( $item ) {
	$twitterUsername = 'NeilCrosby';
	
	$description = strip_tags($item->description);
	$class = '';
	if ( $twitterUsername != substr($description, 0, strlen($twitterUsername)) ) {
		$author = $item->author[0];
		preg_match('/(^[^\s]+)/', $author, $matches);
		$description = $matches[1] . ': ' . $description;
		$class=' twitter_at_user';
 	}
	
	return "
		<li class='module twitter$class'>
		  <div>
  		  <div class='hd'>
  		    <h3><a href='{$item->link}'>Twitter</a></h3>
  		  </div>
  		  <div class='bd'>
  		    <p><a href='{$item->link}'>$description</a></p>
  		  </div>
			  <div class='ft'>
			    <p>{$item->pubDate}</p>
        </div>
      </div>
		</li>";
}

?>