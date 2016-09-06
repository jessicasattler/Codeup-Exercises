<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.


$query = 'Tina';

function arrayContains($arrayName,$query){
	$result = array_search($query, $arrayName);
	//returns whatever the statement evaluates to, either true or false
	return ($result !== false);
}
//echoes 1 or 0, 1 if the return statement is true or false if it's zero
echo arrayContains($names, $query).PHP_EOL;

//Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
echo "New Exercise".PHP_EOL;
function compareArrays($arrayOne, $arrayTwo){
	$count=0;
	foreach($arrayOne as $value){
		echo $count.PHP_EOL;
		echo $value.PHP_EOL;
		//if the second array contains the value we're iterating through
		//in the first array, then that will evaluate to true
		if(arrayContains($arrayTwo, $value)){
			$count +=1;
		}

	}
	return $count;
}

echo "The number of items in common is ". compareArrays($names, $compare);

