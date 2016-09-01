<?php 

//Create a for loop that shows all even numbers between 1 and 100 using continue.

for($i = 1; $i <= 100; $i += 1){
	if($i % 2 == 0){
		echo $i .PHP_EOL;
	}else {
		continue;
	}
}

//Create another for loop that counts from 1 to 100, but stops after 10 using break.
echo "Second part of exercise";
for ($i = 0; $i<= 100; $i +=1){
	if ($i > 10){
		break;
	}else{
		echo $i .PHP_EOL;
	}
}