<?php
    if (isset($_REQUEST['upload'])) {
        handleUploadRequest();
    } else {
        header("Location: index.php");
    }

    function handleUploadRequest() { 
        //$sizeFile = isset($_FILES["inputFile"]["size"]) / 1024; //KB
        $tmpFile = $_FILES["inputFile"]["tmp_name"];

        $path = checkFileTag();

        if (move_uploaded_file($tmpFile, $path)) {
            echo "Archivo subido correctamente";
            header("Location: index.php");
        } else {
            echo "Error al subir el archivo";
            header("Location: index.php");
        }
    }

    function checkFileTag() {
        $nameFile = $_FILES["inputFile"]["name"];
        $typeFile = $_FILES["inputFile"]["type"];
        echo $typeFile;
        $id = time();

        log($typeFile);

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
?>