<?php

class Audio {

    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }

    public function getAudio($path) {
        $audiolist = "";

        $audiolist .= '<audio controls>'.PHP_EOL;
        $audiolist .= '<source src="'.$path.'" type="audio/mpeg">'.PHP_EOL;
        $audiolist .= '</audio>'.PHP_EOL;

        return $audiolist;
    }
}

?>