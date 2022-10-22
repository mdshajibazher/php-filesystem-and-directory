<?php

class Dir
{
    private $directories;
    private $files;
    private $path;
    private $direactoryObjects =[];
    function __construct($path)
    {
        if (is_readable($path)) {
            $this->path = $path;
            $entries = scandir($path);
            foreach ($entries as $entry) {
                if ($entry != '.' && $entry != '..') {
                    if (is_dir($this->path.DIRECTORY_SEPARATOR.$entry)) {
                       $this->directories[] = $entry;
                    } else {
                        $this->files[] = $entry;
                    }
                }
            }
        }
    }

    function getDirectories(){
        return $this->directories;
    }

    function getFiles(){
        return $this->files;
    }

    function getDirectory($index){
        if(isset($this->directories[$index])){

            if(!isset($this->direactoryObjects[$index]) ){
                echo "creating new object\n";
                $this->direactoryObjects[$index] = new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
            }else{
                echo "using old object\n";
            }
            return $this->direactoryObjects[$index] ;
        }else{
            throw new Exception("Directory does not exists");
        }
        return false;
    }
}


