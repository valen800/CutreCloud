<?php

class Image {
    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }
    
    public function getImage($path) {
        $imageList = "";

        $imageList .= '<img src="'.$path.'" alt="img">'.PHP_EOL;

        return $imageList;
    }
}

?>