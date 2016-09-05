<?php 

//associative arrays
 $myArray = [1,2,3,4];

 echo $myArray[0].PHP_EOL;
 echo $myArray [3].PHP_EOL;

 $myArray2 = [
 		"first"=> 1,
 		"second"=>2,
 		"third"=>3,
 		"fourth"=>4
 ];

 echo $myArray2["first"].PHP_EOL;
 echo $myArray2["third"].PHP_EOL;

 foreach($myArray2 as $key =>$value){
 	echo "The $key is {$key} and the value is {$value}".PHP_EOL;
 }

 //multidimensional arrays

 $multiNumberArray =[
 	[1,2,3],
 	[4,5,6]
 ];

 print_r($multiNumberArray[0][1]);

