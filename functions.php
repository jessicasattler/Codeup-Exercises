<?php 

	$outside = 9;
	// //this concatenates 3 variables into a single string
	// // $a is a string with no limit
	function addSomething($a,$b,$c){
		//echo $c.PHP_EOL;
		return $a." ".$b." ".$c;
	}

	echo addSomething(1,3,$outside).PHP_EOL;
	echo $inside;
	// //must pass in all three parameters or else erros message
	echo  addSomething("HOLA","MUNDO","BUEN DIA");

//or with globals but not recommended
	// $GLOBALS[$outside] = 9;
	//this concatenates 3 variables into a single string
	// $a is a string with no limit
	// function addSomething($a,$b,$c){
	// 	echo "Global outside".$GLOBALS['outside'];
	// 	return $a." ".$b." ".$c;
	// }

	// echo addSomething(1,3,$outside).PHP_EOL;
	// echo $inside;
	//must pass in all three parameters or else erros message
	// echo  addSomething("HOLA","MUNDO","BUEN DIA").PHP_EOL;

	// print_r($GLOBALS);