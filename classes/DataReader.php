<?php

class DataReader {
    
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
        $ignoreCache = isset($_GET['ignore_cache']);

        $data = apc_fetch($url);
        if (!$data || $ignoreCache) {
            error_log('CACHE MISS: '.$url);

            $data = file_get_contents( $url );

            apc_store($url, $data, 600);
        }
        
        $doc = new DomDocument();
        @$doc->loadHtml( $data );
        
        return $doc;
    }

}