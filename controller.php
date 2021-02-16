<?php
include_once './Classes/Controller.php';

    if (isset($_REQUEST['upload'])) {
        Controller::handleUploadRequest();
    } else {
        header("Location: index.php");
    }
?>