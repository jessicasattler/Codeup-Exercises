<?php

$val = 50;
$val2 = 2.24;

/**
 * Adds two numbers
 * @param {Number} a 
 * @param {Number} b takes a null by default
 * @return {Number} sum
 */

function add($a, $b = 6)
{
	if(throwErrorMessage("add", $a, $b)){
    	return $a + $b;
	}
}

function subtract($a, $b = 1)
{
    if(throwErrorMessage("substract", $a, $b)){
    	return $a - $b;
	}
}

function multiply($a, $b)
{
    if(throwErrorMessage("multiply", $a, $b)){
    	return $a * $b;
	}
}

function division($a, $b)
{
    if(throwErrorMessage("division", $a, $b)){
    	return $a / $b;
	}
}

function modulus($a, $b)
{
   	if(throwErrorMessage("modulus", $a, $b)){
    	return $a % $b;
	}
}

function throwErrorMessage($fx, $a, $b){
	if(is_numeric($a) && is_numeric($b)){
		if(($fx != 'division' && $b != 0)){
			return true;
		}else{
			echo "Invalid input, division by 0";
		}
	}else{
		echo "Invalid datatypes in function $fx, expecting numbers";
	}
	
}

// Add code to test your functions here

echo add($val,0).PHP_EOL;
echo subtract($val, $val2).PHP_EOL;
echo multiply($val,$val2).PHP_EOL;
echo division($val,0).PHP_EOL;
echo modulus($val,$val2).PHP_EOL;
