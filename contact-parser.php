<?php

//list of cities comes from an external file so that it can work for multiple city files
//$php contact-parser.php contacts.txt

//get input from the command line
//store it in $cities

if (! isset($argv[1])){
	echo 'Please provide a filename!'.PHP_EOL;
	die;
}

$contacts = $argv[1];


//this function adds the - in between the phone numbers
function formatPhoneNumber($number){
	$arrayOfNumbers = str_split($number);
	$string = $arrayOfNumbers[0]
			. $arrayOfNumbers[1]
            . $arrayOfNumbers[2]
            . "-"
            . $arrayOfNumbers[3]
            . $arrayOfNumbers[4]
            . $arrayOfNumbers[5]
            . "-"
            . $arrayOfNumbers[6]
            . $arrayOfNumbers[7]
            . $arrayOfNumbers[8]
            . $arrayOfNumbers[9];

     return $string;
}



//pseudo code

function parseContacts ($filename){
	//array that will hold associative arrays representing one contact

	$contacts = [];
	//get the file contents...
	$handle = fopen($filename, 'r');
	$fileContents = trim(fread($handle, filesize($filename)));

	//convert contents to an array of lines in the file

	//$fileContents was trimmed so in my loop, we don't think that the white space after
	//the last contact is another contact, trim trims white space to its left and right
	//explodeturns strings into arrays
	$contacts = explode ("\n", $fileContents);

	//loop trough the contents array
		//foreach line in the file...
		//construct an associative array with a 'name' and 'phone' key
			//we'll need to explode each line on '|' to ge tthe name and number
		//do something to format the phone number, maybe a formatPhoneNumber function?
		//push that associative array onto the contacts array
	$contacts2=[];
	foreach($contacts as $key => $value){

		$nameAndNumberArray2 = explode("|",$value);
		// $nameAndNumberArray2  =    ["John Smith", "210-333-4333"]
		// The code below is shorthand for pushing a new element into the $nameAndNumberArray with the 
		// key "name" and the value of what $nameAndNumberArray2[0] evaluates to
		$nameAndNumberArray['name'] = $nameAndNumberArray2[0];
		$nameAndNumberArray['number'] = formatPhoneNumber($nameAndNumberArray2[1]);

		

		
		array_push($contacts2,$nameAndNumberArray);
		// array_shift($contacts);
		

	}


	return $contacts2;
}

var_dump(parseContacts('contacts.txt'));



