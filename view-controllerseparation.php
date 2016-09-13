<?php 

//Write the output
//Notice the space after the ?
fwrite(STDOUT, 'What is the name of your favorite show? ');

//Get the input from the user
$showName =fgets(STDIN);

//Output the user's show and friendly message
fwrite(STDOUT, "Really? $showName is my favorite show too".PHP_EOL);

//We can pass arguments to an app by including them after the filename

//$argc contains count of all the arguments
//$argv contains an array of all the values passed to PHP

//Dump arg count
var_dump($argc);

//Dump arg vars
var_dump($argv);


//If there are 2 ars + filename
if($argc == 3){
	//Echo them out directly
	 echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}".PHP_EOL;
}

for ($i = 0; $i <= 100; $i +=2){
	echo "\$i has a value of {$i}".PHP_EOL;
}
//Using foreach
$numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];

foreach($numbers as $value){
	echo "\$number has a value of {$value}".PHP_EOL;
}

//We can use the values inside the block as well

$numbers = [1,2,3,4,5];
foreach ($numbers as $value){
	$newNumber = $value * 2;
	echo "$value * 2 is {$newNumber}".PHP_EOL;
}

//We can iterate over any type of array value, not just integers
$animalTypes = ['dogs', 'cats', 'snakes','birds','dinosaurs'];
foreach ($animalTypes as $animal){
	echo "Old McDonald had a far, and on that farm he raised some {$animal}".PHP_EOL;
}

$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);

foreach($data as $datum){
	if(is_numeric($datum)){
		echo "{$datum} is a number".PHP_EOL;
	}else if (is_string($datum)){
		echo "${datum} is a string".PHP_EOL;
	}
	
}











