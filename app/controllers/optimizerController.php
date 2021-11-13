<?php

$path = $_POST['path'];

var_dump($path);

$files = scandir($path);

foreach($files as $file){
    echo $file;
    echo "<br>";
}