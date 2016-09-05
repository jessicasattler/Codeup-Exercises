<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.

function combine_arrays($arrayOne, $arrayTwo){
	$newArray = [];
	foreach($arrayOne as $key => $value){
		if ($arrayOne[$key] == $arrayTwo[$key]){
			$newArray[] = $arrayOne[$key]; 
		}else{
			$newArray[] = $arrayOne[$key];
			$newArray[] = $arrayTwo[$key];
		}
	}
	return $newArray;
}

print_r(combine_arrays($names, $compare));