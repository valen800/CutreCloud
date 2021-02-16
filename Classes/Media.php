<?php 

require_once 'Audio.php';
require_once 'Video.php';
require_once 'Image.php';
require_once 'Constants.php';

class Media {

    public static function getListMedia($typeMedia) {
        print_r($typeMedia);

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

    public static function checkFileTag() {
        $nameFile = $_FILES["inputFile"]["name"];
        $typeFile = $_FILES["inputFile"]["type"];
        echo $typeFile;
        $id = time();

        switch ($typeFile) {
            case strpos($typeFile, 'audio'):
                return 'media/audio/'.$id.$nameFile;
                break;
            case strpos($typeFile, 'image'):
                return 'media/image/'.$id.$nameFile;
                break;
            case strpos($typeFile, 'video'):
                return 'media/video/'.$id.$nameFile;
                break;
            default:
                echo "No se permite esta extension";
                break;
        }
    }

    private static function getImages() {
        $path = './media/image/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $imageList = '';
    
        foreach ($ficheros as $key => $value) {
            /* Object Image */
            $image = new Image($value);
            $imageList .= $image->getImage();
        }

        return $imageList;
    }

    private static function getVideos() {
        $path = './media/video/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $videoList = '';
    
        foreach ($ficheros as $key => $value) {
            /* Object Video */
            $video = new Video($value);
            $videoList .= $video->getVideo();
        }
        return $videoList;
    }

    private static function getAudios() {
        $path = './media/audio/';
        $ficheros = array_diff(scandir($path), array('..','.'));

        $audioList = '';
    
        foreach ($ficheros as $key => $value) {
            /* Object Audio */
            $audio = new Audio($value);
            $audioList .= $audio->getAudio();
        }

        return $audioList;
    }
}

?>