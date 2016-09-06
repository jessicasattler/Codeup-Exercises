<?php 

//let'd develop an application
//create a random student picker in php
//list of names comes from an external file so that it could work for multiple 

//example
//$php using-files.php lassent.tex

//get input from the command line
//store in in $cohort
if(! isset($argv[1])){
	echo 'give me a filename!' .PHP_EOL;
	//dramatically exit, same as saying exit 
	die;
}
$cohort = $argv[1];

var_dump($cohort);

//what do we do with the filename?
function getFileContents($filename){

	//create a resource that points to our file
	//http://php.net/manual/en/function.fopen.php
	//'r' means for reading
	//- more modes in the next lesson
	//like a cursor or pointer
	$handle = fopen($filename, 'r');

	//our handle is at the start of the file, read until the end of the file
	//i.e. the size of the file
	$fileContents=fread($handle, filesizes($filename));

	//make sure to cleanup
	fclose($handle);

	return $fileContents;
}
//for debugging purposes, var_dump
// var_dump(getFileContents($cohort));

$names = getFileContents($cohort);

//turn $names into an array of names i.e. of lines in the file
$names = explode("\n", $names);

array_pop($names);

var_dump($names);
//from here you can manipulate each line, for example split on ','
//or get a random element from the array

function getRandomElement($array){
	//get random number between the minimum and the maxium indices in 
	//the array
	$min = 0;
	$max = count($array)-1;

	$randomIndex = mt_rand($min, $max);
	//return the element at that index
	return $array[$randomIndex];
}

$selectedStudent = getRandomElement($names);

echo <<<OUTPUT

-------
>$selectedStudent is up to demo!
-------

OUTPUT;