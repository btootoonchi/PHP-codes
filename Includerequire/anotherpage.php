<?php 
include 'header.inc.php';
require 'doesnotexist.php';//Fatal error kill the rest of file

$var = 10;

echo $var;
echo $var2;
?>