<?php 

function zero(){
	return 0;
}

//function has four parts
//the word function
//what it does 
//


//steps
//defining functions
//using functions (calling, invoking, running)

//anatomy of a function
//part 1-keyword "funnction"
//part 2-name of the function
//part3-parameters in the parenthesis (comma separated, arguments)
//part 4-body of the function in the curly braces
function doTheThing{
	echo "the thing";
}

//using functions that are already built
//defining our own functions
//calling our own functions

//when making our own functions that is similar to the work that internal built in functions , we don't have to define that ourselfs

function upperCase($string){
	return strtoupper ($string);
}

echo upperCase("howdy");