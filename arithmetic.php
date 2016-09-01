<?php

$a = 5;
$b = 7;

//Adds two numbers
//@param {Number} a
//@param {Number} b takes a null by default

//validate all arguments, and display an error message if the input is not numeric

function throwErrorMessage($a,$b){
	return "ERROR: Both arguments must be numbers, whereas your arguments are {$a} and {$b}".PHP_EOL;
	}

function add($a,$b){
	if(is_numeric($a)&& is_numeric($b)){
		return $a +$b;
	}else{
		throwErrorMessage("add");
	}
}


//validate all arguments, and display an error message if the input is not numeric
function subtract ($a,$b){
	if(is_numeric($a)&& is_numeric($b)){
		return $a -$b;
	}else{
		throwErrorMessage("subtract");
	}
}


//validate all arguments, and display an error message if the input is not numeric
function multiply ($a, $b){
	if(is_numeric($a)&& is_numeric($b)){
		return $a * $b;
	}else{
		throwErrorMessage("multiply");
	}
}

//validate all arguments, and display an error message if the input is not numeric
function divide($a,$b){
	if(is_numeric($a)&& is_numeric($b)){
		if($b != 0){
		return $a / $b;
		}else{
			return "ERROR:Your second argument is {$b}. Not valid to divide by zero.";
		}
	}else{
		throwErrorMessage("divide");
	}
}

//validate all arguments, and display an error message if the input is not numeric
function modulus ($a,$b){
	if(is_numeric($a)&& is_numeric($b)){
		return $a % $b;
	}else {
		throwErrorMessage("modulus");
	}
}


// Add code to test your functions here
//In PHP, global variables can't be accessed inside of functions, global variables only work in the global scope and local variables only in the local scope. Unlike in JavaScript where the global variables are accessible inside of the functions too.
echo "Add: ".add (l,1).PHP_EOL;
echo "Subtract: ".subtract (7,1).PHP_EOL;
echo "Multiply: ".multiply (7,1).PHP_EOL;
echo "Divide: ".divide (7,7).PHP_EOL;
echo "Modulus: ".modulus (7,1).PHP_EOL;

echo "NEW";

// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own throwErrorMessage() function, have the other functions use it for error messaging.