<?php
include_once "Constants.php";

class Audio {

    private $path = "";
    
    public function __construct($path) {
        $this->path = $path;
    }

    public function getAudio() {
        $audio = "";

        $audio .= '<audio controls>'.PHP_EOL;
        $audio .= '<source src="'.Constants::PATH_AUDIOS.$this->path.'" type="audio/mpeg">'.PHP_EOL;
        $audio .= '</audio>'.PHP_EOL;

        return $audio;
    }
}

?>