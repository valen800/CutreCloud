<?php

class Video {
    
    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }
    
    public function getVideo($path) {
        $videoList = '';
    
        $videoList .= '<video width="320" height="240" controls>'.PHP_EOL;
        $videoList .= '<source src="'.$path.'" type="video/mp4">'.PHP_EOL;
        $videoList .= '</video>'.PHP_EOL;

        return $videoList;
    }
}

?>