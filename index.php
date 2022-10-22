<?php

include_once './Dir.php';

$directory = new Dir(getcwd());
//print_r($directory->getDirectories());
//print_r($directory->getFiles());

$another = $directory->getDirectory(1);
$dummy = $directory->getDirectory(2);
print_r($another->getFiles());
print_r($another->getDirectories());
print_r($dummy->getFiles());
print_r($dummy->getDirectories());