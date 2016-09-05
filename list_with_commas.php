<?php 

// Using the $physicistsString from the lecture notes and your new knowledge of pushing, popping, exploding, and imploding:

// Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.

$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

//Turn your solution into a function named humanizedList(). 
//You should be able to pass the $physicistsArray as the only parameter, and your function will return the result.

// Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
   // Your solution goes here!
 	//get rid of last element , then add 'and', and finally add back the last element

 	

 	//this can be done but it's more complicated:
 		// if ($array[$key] != ){
 		//   return  implode (',', $array);
 		// }else{
 		// 	return implode ('and', $array);
 		// }



 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = [];

 	$physicistsArray = explode(',', $physicistsString);

 	print_r ($physicistsArray);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";