<?php

// TODO: Create your inspect() function here
// At the top of the file, create a new function called inspect() that takes in one argument. Your inspect() function should look at the passed argument and return a string with the variable's type and its value, similar to "The integer is 12.

function inspect($a){
	// return  "The  ".gettype($a) ." is {$a}".PHP_EOL;

	switch (gettype($a)){
		case 'NULL':
			echo "The value is NULL";
			break;
		case 'array':
			if ($a != []){
				echo "The value is an array";
			}else{
				echo "The value is an empty array";
			}
			break;
		case 'boolean':
			if ($a) {
				echo "{$a} is true";
			}else{
				echo "the boolean is false";
			}
			break;
		case 'string':
			if ($a != ""){
				echo "{$a} is a string";
			}else{
				echo "The value is an empty string";
			}
			break;
		case 'integer':
			echo "{$a} is an integer";
			break;
		case 'double':
			echo "{$a} is a double";
			break;
	}
}

// echo inspect (7).PHP_EOL;

// If the variable is NULL, return "The value is NULL."
// If the variable is an array, return "The value is an array"
// If the variable is an empty array, return "The value is an empty array."
// If the variable is a boolean, make sure your return value says whether it is TRUE or FALSE.
// If the variable is an empty string, return "The string is empty."


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1).PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2).PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3).PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4).PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null).PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1).PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2).PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1).PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2).PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1).PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2).PHP_EOL;
