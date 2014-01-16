<?php

class Events {
    
    private $endpoint = null;

    public function __construct($endpoint) {
        $this->endpoint = $endpoint;
    }

    public function getEvents() {
        $dataReader  = new DataReader();

        $data = $dataReader->getDataFromHtml( $this->endpoint );

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

}