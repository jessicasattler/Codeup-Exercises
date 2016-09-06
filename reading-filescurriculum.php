<?php 

$filename = 'cities.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);

