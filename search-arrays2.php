<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

//name or value we're looking for

//search for query in $names array
$query = 'Tina';
function arrayHas($haystack, $needle){
$result = array_search($needle, $haystack);
	return $result !== false;
	// if ($result !== false){
	// 	return "TRUE".PHP_EOL;
	// }else{
	// 	return "FALSE".PHP_EOL;
	// }
}

echo arrayHas($names, $query);
// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function namesInCommon($arrayOne, $arrayTwo){
	$count = 0;
	foreach($arrayOne as $value){
		if(arrayHas($arrayTwo, $value)){
			$count += 1;
		}
	}
	return $count.PHP_EOL;
}
//the following doesn't work
echo namesInCommon($names, $compare);