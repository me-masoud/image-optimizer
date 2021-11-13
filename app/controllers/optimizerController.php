<?php

require_once '../services/curlService.php';

$path = $_POST['path'];

$files = scandir($path);
$randFolder = rand(10000 , 99999);
$folderPath = "../../public/result/" .$randFolder;

if (mkdir($folderPath)) {

    $curl = new Curl();

    foreach ($files as $file) {
        $url = getUrl($path . $file , 50);
        echo $url;
//        var_dump($curl->getResponse($url));
        echo "<br>";
    }
}

function getUrl($imageLink , $quality){
    return "http://api.resmush.it/ws.php?img=". $imageLink . "&" ."qlty=". $quality;
}