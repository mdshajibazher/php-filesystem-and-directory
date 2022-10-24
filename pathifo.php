<?php
define("FILENAME", getcwd() . DIRECTORY_SEPARATOR . "pathinfo.php");
echo pathinfo(FILENAME,PATHINFO_BASENAME)."\n";
echo pathinfo(FILENAME,PATHINFO_DIRNAME)."\n";
echo pathinfo(FILENAME,PATHINFO_EXTENSION)."\n";
echo pathinfo(FILENAME,PATHINFO_FILENAME)."\n";