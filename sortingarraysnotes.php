<?php 

 //pretend there's an array here

//echo "THe reverse alphabetical order is "
// asort($nameOfArray);
//var_dump($nameOfArray);

//echo "The rsort output is below ".PHP_EOL;
//rsort($nameOfArray);
//var_dump($nameOfArray);
//we just lost our keys so be careful
//when it says it does not maintain key association, that means we lose our keys

//all of the sorts do not return an array 

//Don't do this
//$result = rsort($nameOfArray);

//var_dump($nameOfArray);
//rsort is built to return a boolean, it tells us whether or not the array was able to be succesfully sorted or not, we would get false on failure. 

//in the documentation of function.rsort when we see under descrption , the part that starts with [, means its optional so just ignore what's in [] for that part

//return value is not the same thing as what happened to the array

//to make a copy of the original array, save it in a variable:
//$copyOfStates = $states;