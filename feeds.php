<?php

$options = array(
    'considered' => 'http://feeds.neilcrosby.com/NeilCrosbyLifestreamConsidered',
    'stream-of-consciousness' => 'http://feeds.neilcrosby.com/NeilCrosbyLifestreamOfConsciousness',
    'others-said' => 'http://feeds.neilcrosby.com/NeilCrosbyOthersSaid',
    'flickr' => 'http://api.flickr.com/services/feeds/photos_public.gne?id=36778932@N00&tags=publishneilcrosbycom&lang=en-us&format=rss_200',
);

$optionsFeedburner = array(
    'considered' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=ADbNqOil3BGGzfPa6kjTQA&_render=rss',
    'stream-of-consciousness' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=f41d64550e674b7f01bad0f3c49d46f8&_render=rss',
    'others-said' => 'http://pipes.yahoo.com/pipes/pipe.run?_id=ygKh4Siu3BGqyNyQJphxuA&_render=rss',
);

if ( !isset( $_GET['feed'] ) || !array_key_exists( $_GET['feed'], $options ) ) {
    exit;
}

if ('FeedBurner' == mb_substr($_SERVER['USER_AGENT'], 0, mb_strlen('FeedBurner'))) {
    header("Content-Type: application/rss+xml");
    readfile( $optionsFeedburner[$_GET['feed']] );
} else {
    //readfile( $options[$_GET['feed']] );
    header('Location: '.$options[$_GET['feed']]);
}

?>