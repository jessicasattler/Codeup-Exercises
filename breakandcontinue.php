<?php 

//break and continue -- skip to the next iteration or stop a loop

//break


//didn't get to write down the notes



//continue

for (i = 0; $i < 20; $i += 1){
	if ($i ==7){
		continue;
	}
	echo $i .PHP_EOL;


}

echo "All Done";

//if we are in two nested for each loops, if we want to continue to the outer loop then do "continue 2" or break so that it breaks out of just the inner loop or continue 2 since it continues to the outer loop
//preferred way to do it would be break  unless it's continue to get other important information if order is different