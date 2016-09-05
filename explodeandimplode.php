<?php 

//explode turns strings into arrays
//implode turns arrays into strings by our choice of delimeter (separator)
$physicistsString = 'Gorddon, Samantha, Sheldon, Quinn';

$physicistsArray = explode(',', $physicistsString);

$physicistsString = implode('**', $physicistsArray);

print_r($physicistsArray).PHP_EOL;
echo $physicistsString.PHP_EOL;

echo "These are physicists {$physicistsString}";


