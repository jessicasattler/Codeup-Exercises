<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina' && 'Dana';

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// $result = array_search($query, $names);

// if ($result !== false){
// 	echo "TRUE".PHP_EOL;
// }else{
// 	echo "FALSE".PHP_EOL;
// }


//or zach's way
function arrayContains($haystack, $needle){
	$result = array_search($needle, $haystack);
	return $result !== false;
}

//my attempt to apply this
// function arrayContains($names, $value){
// 	$result = array_search($value, $names);
// 	return $result !== false;
// }
// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


$query1 = 'Dana';

$results = array_search($query1, $names);

$query2 = 'Dean';

$results2 = array_search($query2, $compare);



	// if ($results == $results2){
	// echo "that value is in both arrays";
	// }else{
	// echo "that value is not in both arrays";
	// }

echo $results2;

// for($i=0; $i <= 5; $i +=1){
// 	if (){

// 	}

// }

//zach's way

function compareArrays($arrayOne, $arrayTwo){
	//keep count of the common elements
	$count =0;
	//loop through one array for every item
	foreach ($arrayOne as $value){
		//if the item is in the second array, increment our count
		if(arrayContains($arrayTwo, $value)){
			$count +=1;
		}
	}
//return the count
return $count;
	
}
var_dump(compareArrays [1,2,3]));


