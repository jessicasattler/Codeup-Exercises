<?php


// echo 'hello from an external file!' . PHP_EOL;

$numbers = array(1,2,3,4,5);
var_dump($numbers);
print_r($numbers);

$numbers2 = [1,2,3,4,5];
var_dump($numbers2);
print_r($numbers2);

echo ($numbers[3]);
////
$information = array('first_name'=>'Jessica', 'last_name'=>'Sattler','email'=> 'jessica@hotmail.com','phone'=>'210-345-8976');
print_r ($information);



$test = array('person1'=>$information,
		'person2' =>array('first_name'=>'lauren',
							'last_name'=>'smith'),
		'person3'=>array('first_name'=>'whitney',
							'last_name'=>'sattler'));
print_r ($test);

?>
<!-- outside closing php tag  -->