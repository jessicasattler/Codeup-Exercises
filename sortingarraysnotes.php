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

$names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];
$copyOfNames =$names;
print_r($names);

//orders them in alphabetical order 
echo "asort".PHP_EOL;
asort($names);
print_r($names);

//sort() sorts them by keys
echo "ksort".PHP_EOL;
ksort($names);
print_r($names);


//we use (sort) to order both the values and the indexed keys
echo "sort".PHP_EOL;
sort($names);
print_r($names);

//we use (arsort) to reverse the order by value
echo 'arsort'.PHP_EOL;
arsort($names);
print_r($names);

//rsort will reorder in reverse order both keys and values
echo "rsort".PHP_EOL;
rsort($names);
print_r($names);

//shuffle randomly orders an array, like shuffling a deck of cards
echo "shuffle".PHP_EOL;
shuffle($names);
print_r($names);


