<?php 

	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	$physicistsArray = explode(', ', $physicistsString);

	$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner and Tony Stark';

	// $physicistsArray = explode(', ', $physicistsString);

	// $physicistsString = implode('*', $physicistsArray);

	// print_r($physicistsArray);
	// echo $physicistsString;

	function humanizedList($array, $sort = false) {
		if($sort){
			asort($array);
		}
		$lastItem = array_pop($array);
		return implode(', ',$array). " and ". $lastItem;
 	}

 	$famousFakePhysicists = humanizedList($physicistsArray, true);

 	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.".PHP_EOL;