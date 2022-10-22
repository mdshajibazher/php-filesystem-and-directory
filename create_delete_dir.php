<?php

mkdir("test",0777,true);
file_put_contents("test/f1.txt","hello World");
sleep(2);

deleteDir(getcwd().DIRECTORY_SEPARATOR."test");

function deleteDir($path){
    $dirAndFilesArray = scandir($path);
    if(count($dirAndFilesArray) > 2){
       foreach ($dirAndFilesArray as $dirAndFile ){
           if ($dirAndFile != '.' && $dirAndFile != '..') {
               $filePath = $path . DIRECTORY_SEPARATOR . $dirAndFile;
               echo $filePath;
               unlink($filePath);
           }
       }
    }
    rmdir($path);

}