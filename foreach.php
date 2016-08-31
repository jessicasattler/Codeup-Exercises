<?php 

 // $data = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string

// foreach ($data as $value){
// 	if (is_int($value)){
// 		echo "{$value} is a number\n";
// 	}else if(is_float($value)){
// 		echo "{$value} is a float\n";
// 	}else if(is_bool($value)){
// 		echo "{$value} is a boolean\n";
// 	}else if(is_array($value)){
// 		echo "{$value} is an array\n";
// 	}else if(is_null($value)){
// 		echo "{$value} is null\n";
// 	}else if(is_string($value)){
// 		echo "{$value} is a string\n";
// 	}
// }
$data = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($data as $datum) {
    if (is_int($datum)) {
        echo "{$datum} is an integer\n";
    } else if (is_float($datum)) {
        echo "{$datum} is a float\n";
    } else if(is_bool($datum)){
    	echo "{$datum} is a boolean\n";
    } else if(is_array($datum)){
    	foreach($datum as $datum){
    	echo "{$datum} is an array\n";
    	}
    } else if(is_null($datum)){
    	echo "{$datum} is null\n";
    	echo gettype($datum);
    }else if(is_string($datum)){
    	echo "{$datum} is a string\n";
    }
}

$things = array(
	'Sgt. Pepper',
	 "11", 
	 null, 
	 array(1,2,3), 
	 3.14,
	  "12 + 7", 
	  false,
	  (string) 11
);

//Construct a loop that iterates through each value and outputs only values with a type that is scalar
echo "New Exercise".PHP_EOL;

foreach ($things as $value){
	if (is_scalar($value)){
		echo "{$value} is scalar".PHP_EOL;
	}
}

echo "Last Exercise".PHP_EOL;

foreach ($things as $value){
	echo  "The type is " . gettype($value). "." . " The value is: ".PHP_EOL;
	if (is_array($value)){
		foreach($value as $value){
			echo $value.PHP_EOL ;
		}
	}else{
		echo $value .PHP_EOL ;
	}
	echo PHP_EOL;
}

// or to add commas the easy way
// foreach ($things as $value){
// 	echo  "The type is " . gettype($value). "." . " The value is: ".PHP_EOL;
// 	if (is_array($value)){
// 		$message .= implode (",", $thing);
// 		}
// 	}else{
// 		echo $value .PHP_EOL ;
// 	}
// 	echo PHP_EOL;
// }

