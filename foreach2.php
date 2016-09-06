<?php 

 $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

 foreach ($things as $thing){
 	if(is_integer($thing)){
 		echo "{$thing} is an integer".PHP_EOL;
 	}else if(is_float($thing)){
 		echo "{$thing} is a float".PHP_EOL;
 	}else if(is_bool($thing)){
 		echo "{$thing} is a boolean".PHP_EOL;
 	}else if(is_array($thing)){
 			echo "is an array with the following:".PHP_EOL;
 		foreach($thing as $value){
 			print_r($value.PHP_EOL);
 		}
 	}else if(is_null($thing)){
 		echo "{$thing} is null".PHP_EOL;
 	}else if(is_string($thing)){
 		echo "{$thing} is a string".PHP_EOL;
 	}
 }

 //Construct a loop that iterates through each value and outputs only values with a type that is scalar.
echo PHP_EOL;
 foreach ($things as $thing){
 	if(is_scalar($thing)){
 		echo "{$thing} is scalar".PHP_EOL;
 	}
 }

echo "last exercise".PHP_EOL;
 //Create a loop that will echo out every value, including those nested in arrays. Output should look like this.
 foreach ($things as $thing){
 	if(is_array($thing)){
 		echo "Array".PHP_EOL;
 		foreach($thing as $value){
 			print_r($value.PHP_EOL);
 		}
 	}else{
 		echo $thing.PHP_EOL;
 	}
 }