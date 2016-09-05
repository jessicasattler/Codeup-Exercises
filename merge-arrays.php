<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

//the following function takes in two parameters 
function combine_arrays($names, $compare){
	//the keys are the index of the array
	foreach ($names as $key => $value){

		if($names[$key] == $compare[$key]){
			$newArray [] = $names[$key];
		}else{
			$newArray[] = $names[$key];
			$newArray[] = $compare[$key];
		}
	}
		print_r($newArray);
}
combine_arrays($names,$compare);
// array_push($names,'Bob');
// print_r($names);

//or I can do it like this with generic variable names

//the following function takes in two parameters 
function combine_arrays2($array1, $array2){
	//the keys are the index of the array
	foreach ($array1 as $key => $value){
		//if the index at array key is the same as index array2 key, then in shorthand, make the new array have the key of array 1, we don't need to do that with array2 because we would have duplicate values otherwise
		if($array1[$key] == $array2[$key]){
			$newArray [] = $array1[$key];
		//if array 1 index and array 2 index (the index will be the same each time the loop goes through) is not the same, then add the key value to the new array, do this for array1 and array2
		}else{
			$newArray[] = $array1[$key];
			$newArray[] = $array1[$key];
		}
	}
		//I print it at the end so that the array only prints the final result and not over and over again
		print_r($newArray);
}
combine_arrays2($names,$compare);
// array_push($names,'Bob');
// print_r($names);