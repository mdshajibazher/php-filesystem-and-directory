<?php

//get current working dir
echo getcwd()."\n";

//Shalow Scan  directory
$entries = scandir(getcwd());

foreach($entries as $entry){
    if($entry != '.' && $entry != '..'){
        if(is_dir($entry)){
            echo "[d] {$entry}\n";
        }else{
            echo "[f] {$entry}\n";
        }
    }
}

// directory count in given dir path

function countDir($dir){
    $count = 0;
    $entries = scandir($dir);
    foreach($entries as $entry){
        if($entry != '.' && $entry != '..'){
            if(is_dir($entry)){
                $count++;
            }
        }
    }

    return $count;
}

echo "Current path total dir is : ".countDir(getcwd())."\n";