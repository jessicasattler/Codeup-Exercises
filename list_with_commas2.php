<?php  

//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.


$famousFakePhysicistsArray = ['Gordon Freeman', 'Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark'];
// array_pop($famousFakePhysicistsArray);

// array_push($famousFakePhysicistsArray, 'and Tony Stark');

// $famousFakePhysicists = implode(', ',$famousFakePhysicistsArray);



// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";


function humanizedList($array, $sorting=false){
	//takes last element off of array
	$lastElement = array_pop($array);
	//pushes an element to the end of the array
	array_push($array, "and {$lastElement}");
	if($sorting == true){
		asort($array);
	}

	$arrayToString = implode(', ',$array);

	return $arrayToString;
}



echo "Some of the most famous fictional theoretical physicists are ". humanizedList($famousFakePhysicistsArray,true).".";