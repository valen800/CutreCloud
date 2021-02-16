<?php
include_once './Classes/Media.php';

class Controller {

    public static function handleUploadRequest() {
        //$sizeFile = isset($_FILES["inputFile"]["size"]) / 1024; //KB
        $tmpFile = $_FILES["inputFile"]["tmp_name"];

        $path = Media::checkFileTag();

        if (move_uploaded_file($tmpFile, $path)) {
            echo "Archivo subido correctamente";
            header("Location: index.php");
        } else {
            echo "Error al subir el archivo";
            header("Location: index.php");
        }
    }
}

?>