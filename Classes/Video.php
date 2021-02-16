<?php
include_once "Constants.php";

class Video {
    
    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }
    
    public function getVideo() {
        $video = '';
    
        $video .= '<video width="320" height="240" controls>'.PHP_EOL;
        $video .= '<source src="'.Constants::PATH_VIDEOS.$this->path.'" type="video/webm">'.PHP_EOL;
        $video .= '<source src="'.Constants::PATH_VIDEOS.$this->path.'" type="video/ogg">'.PHP_EOL;
        $video .= '<source src="'.Constants::PATH_VIDEOS.$this->path.'" type="video/mp4">'.PHP_EOL;
        $video .= '<source src="'.Constants::PATH_VIDEOS.$this->path.'" type="video/3gp">'.PHP_EOL;
        $video .= '</video>'.PHP_EOL;

        return $video;
    }
}

?>