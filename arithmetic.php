<?php

$a = 5;
$b = 7;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // Add code here
    return $a -$b;
}

function multiply($a, $b)
{
    // Add code here
    return $a * $b;
}

function divide($a, $b)
{
    // Add code here
    return $a / $b;
}
function modulus($a, $b){
	return $a % $b;
}

// Add code to test your functions here
//In PHP, global variables can't be accessed inside of functions, global variables only work in the global scope and local variables only in the local scope. Unlike in JavaScript where the global variables are accessible inside of the functions too.
echo "Add: ".add ($a,$b).PHP_EOL;
echo "Subtract: ".subtract (7,1).PHP_EOL;
echo "Multiply: ".multiply (7,1).PHP_EOL;
echo "Divide: ".divide (7,1).PHP_EOL;
echo "Modulus: ".modulus (7,1).PHP_EOL;
