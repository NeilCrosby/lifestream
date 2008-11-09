<?php

$options = array(
	'considered' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss',
//	'considered' => 'http://feeds.feedburner.com/NeilCrosbyLifestreamConsidered?format=xml',
	'stream-of-consciousness' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=f41d64550e674b7f01bad0f3c49d46f8&_render=rss',
	'others-said' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=ygKh4Siu3BGqyNyQJphxuA&_render=rss',
);

$optionsFeedburner = array(
	'considered' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss',
);

if ( !isset( $_GET['feed'] ) || !array_key_exists( $_GET['feed'], $options ) ) {
	exit;
}

header("Content-Type: application/rss+xml");
if ('FeedBurner' == substr($_SERVER['USER_AGENT'], 0, strlen('FeedBurner'))) {
	readfile( $optionsFeedburner[$_GET['feed']] );
} else {
	readfile( $options[$_GET['feed']] );
}

?>