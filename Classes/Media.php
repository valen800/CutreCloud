<?php 

require_once 'Audio.php';
require_once 'Video.php';
require_once 'Image.php';
require_once 'Constants.php';

class Media {

    public static function getListMedia($typeMedia) {

        switch ($typeMedia) {
            case 'audio':
                echo self::getAudios();
                break;
            case 'video':
                echo self::getVideos();
                break;
            case 'image':
                echo self::getImages();
                break;            
            default:
                return '';
                break;
        }
    
    }

    private static function getImages() {
        $path = './media/image/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $imageList = '';
    
        foreach ($ficheros as $key => $value) {
            /* Object Image */
        }

        return $imageList;
    }

    private static function getVideos() {
        $path = './media/video/';
        $ficheros = array_diff(scandir($path), array('..','.'));
    
        foreach ($ficheros as $key => $value) {
            /* Object Video */
        }
    }

    private static function getAudios() {
        $path = './media/audio/';
        $ficheros = array_diff(scandir($path), array('..','.'));
    
        foreach ($ficheros as $key => $value) {
            /* Object Audio */
        }
    }
}

?>