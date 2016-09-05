
<?php  

// pretend there's an array with classmate names 

$query = 'joey';

if ($result !== false){
	echo "We found $query at the index $result".PHP_EOL;
}else{
	echo "Sorry, we couldn't find $query".PHP_EOL;
}