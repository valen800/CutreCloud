<?php
include_once "Constants.php";

class Image {
    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }
    
    public function getImage() {
        $image = "";

        $image .= '<img src="'.Constants::PATH_IMAGES.$this->path.'" alt="img"/>'.PHP_EOL;

        return $image;
    }
}

?>