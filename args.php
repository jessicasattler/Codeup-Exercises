<?php 
echo "\$argc is the number of arguments passed to a script". PHP_EOL;
var_dump($argc);

echo PHP_EOL;
echo "\$argv is an array of all the elements" . PHP_EOL;
var_dump($argv);

echo "The filename is $argv[0]" . PHP_EOL;

echo "The firsr user specified argument is $argv[]". PHP_EOL;

echo "The second user specified argument is $argv[2]".PHP_EOL;
//or 

echo "The filename of the script is $agv[0]".PHP_EOL;

if(isset(argv[1])) {
	$firstArgument = $argv[1];
}else{
	$firstArgument = "no value specified";
}

}

//null coalescing
$firstArgument = isset($argv[1]) ? $argv[1] : "no value";

echo "the first argument is $firstArgument" . PHP_EOL;

//different stuff

// for ($i = 0; $i < 5; $i++){

// 	$input = isset($argv[$1]) ? $argv
// }
//not done

 ?>