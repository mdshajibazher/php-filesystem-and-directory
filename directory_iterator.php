<?php

$di = new DirectoryIterator("./");

foreach ($di as $file){
    if($file->isDot()){
        continue;
    }else if($file->isDir()){
        echo "[D] ".$file->getPathName()."\n";
    }else{
        echo "[F] ".$file->getPathName()." Size : {$file->getSize()} bytes \n";
    }

}