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

//what do we do with the filename?
//takes a filename and returns the contents of our file as a string


// function parseContacts($filename)
// {
 

//     // todo - read file and parse contacts
//     //create a resource that points to our file
//     //like a cursor or pointer
//     $handle = fopen($filename, 'r');

//     //our handle is at the start of the file, read until the end of the file
//     //i.e. the size of the file
//     $fileContents = fread($handle, filesize($filename));

//     // $contacts = array($fileContents);
//     $contacts = explode ("\n", $fileContents);
   

//     foreach($contacts as $key => $value){
//     	echo "This is the key {$key} and this is the value {$value} ".PHP_EOL;


//     }

//     // $contactsArray = explode ('|',$contacts);

//     fclose($handle);

//     return $contacts;
// }

// var_dump(parseContacts('contacts.txt'));

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
	$contacts = explode ("\n", $fileContents);

	//loop trough the contents array
		//foreach line in the file...
		//construct an associative array with a 'name' and 'phone' key
			//we'll need to explode each line on '|' to ge tthe name and number
		//do something to format the phone number, maybe a formatPhoneNumber function?
		//push that associative array onto the contacts array
	foreach($contacts as $key => $value){

		$nameAndNumberArray2 = explode("|",$value);
	
		$nameAndNumberArray['name'] = $nameAndNumberArray2[0];
		$nameAndNumberArray['number'] = formatPhoneNumber($nameAndNumberArray2[1]);

		// foreach($nameAndNumberArray as $key =>$value){
			// $getPartString = substr($nameAndNumberArray['number'],0,3).PHP_EOL;
			// echo $getPartString."-";
			// $getPartString2 = substr($nameAndNumberArray['number'],3,3).PHP_EOL;
			// echo $getPartString2."-";
			// $getPartString3 = substr($nameAndNumberArray['number'],8);
			// echo $getPartString3;
		// }

		// print_r($nameAndNumberArray);

		
		array_push($contacts,$nameAndNumberArray);
		array_shift($contacts);
		

	}


	return $contacts;
}

var_dump(parseContacts('contacts.txt'));















