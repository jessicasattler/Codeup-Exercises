<?php 

$states = [
	'CA' => "California",
	'NY' => "New York",
	'TX' => "Texas",
	'HI' => "Hawaii"
];

foreach($states as $key =>$value) {
	echo $value . PHP_EOL;
}

foreach ($states as $state) {
	// echo "The great state of $value has an abbreviation of $key" . PHP_EOL;

	// echo "\$value is the same thing as {$states[$key]}".PHP_EOL .PHP_EOL;

	echo $state.PHP_EOL;


}

foreach($states as $index => $state){
	echo "The state at index $index is $state" .PHP_EOL;
}

foreach ($states as $key => $state){
	echo "$key is the abbrevation for the great state of $state" .PHP_EOL;
}


$students = [
	['name' => 'Virginia Potts', 'age' => 29, 'address' => 'right here'],
	['name' => 'John Smithson', 'age' => 42],
	['name' => 'Rasmus Lerdorf', 'age' => 30],
	['name' => 'Marissa Roberts', 'age' => 57]
];

//ex. "Virginia Potts is 29"

foreach ($students as $student){
	foreach ($student as $key => $value){
		echo "The student's $key is $value" . PHP_EOL;
	}
}