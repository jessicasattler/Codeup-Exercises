<?php

// let's develop an application!
// create a random student picker in php
// list of names comes from an external file so that it could work for multiple
// cohorts

// example
// $ php using-files.php lassen.txt

// get input from the command line
// store it in $cohort

if (! isset($argv[1])) {
    echo 'give me a filename!' . PHP_EOL;
    // dramatically exit
    die;
}

$cohort = $argv[1];

// what do we do with the filename?

// takes a filename and returns the contents of our file as a string
function getFileContents($filename)
{
    // create a resource that points to our file
    // http://php.net/manual/en/function.fopen.php
    // 'r' means for reading
    //   - more modes in the next lesson
    // like a cursor or pointer
    $handle = fopen($filename, 'r');

    // our handle is at the start of the file, read until the end of the file
    // i.e. the size of the file
    $fileContents = fread($handle, filesize($filename));

    // make sure to cleanup
    fclose($handle);

    return $fileContents;
}

$names = getFileContents($cohort);

// turn $names into an array of names i.e. an array of lines in the file
$names = explode("\n", $names);

// remove the last line that is empty
array_pop($names);

// from here you can manipulate each line, for example split on ','
// or get a random element from the array

function getRandomElement($array)
{
    // get a random number between the minimum and the maximum indices in the
    // array
    $min = 0;
    $max = count($array) - 1;

    $randomIndex = mt_rand($min, $max);

    // return the element at that index
    return $array[$randomIndex];
}

$selectedStudent = getRandomElement($names);

echo <<<OUTPUT

------------------------------------------------
> $selectedStudent is up to demo!
------------------------------------------------


OUTPUT;
