<?php

mkdir("recursive_dir/d1/d2/d3",0777,true);
file_put_contents("recursive_dir/f1.txt","hello World");
file_put_contents("recursive_dir/d1/d1_content.txt","hello World from d1 dir");
file_put_contents("recursive_dir/d1//d2/d2_content.txt","hello World from d2 dir");
file_put_contents("recursive_dir/d1//d2/d3/d3_content.txt","hello World from d3 dir");
sleep(2);

deleteDir(getcwd().DIRECTORY_SEPARATOR."recursive_dir");

function deleteDir($path){
    if(!is_readable($path)){
        return;
    };
    $dirAndFilesArray = scandir($path);
    if(count($dirAndFilesArray) > 2){
       foreach ($dirAndFilesArray as $dirAndFile ){
           if ($dirAndFile != '.' && $dirAndFile != '..') {
               $filePath = $path . DIRECTORY_SEPARATOR . $dirAndFile;
               if(is_dir($filePath)){
                   deleteDir($filePath);
               }else{
                   unlink($filePath);
               }

           }
       }
    }
    rmdir($path);
}