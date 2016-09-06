<?php 

// $foreach($contacts as $contact){
// 	//$person = ['Jane', 2107899714]

// 	$newArray = [];
// 	$newArray['name'] = $person[0];
// 	$newArray['phone']= $person[1];
// }

// $person = ['Jane', 2107898714];

// //var_dump($person);
// //	$person[0]=='Jane'
// //	$person[1]=='217890714'

function formatPhoneNumber($number){
	$arrayOfNumbers = str_split($number);
	$string = "(" $arrayOfNumbers[0]
			. $arrayOfNumbers[1]
			. $arrayOfNumbers[2]
			. "-"
			. $arrayOfNumbers[3]
			. $arrayOfNumbers[4]
			. "-"
			. $arrayOfNumbers[5]
			. $arrayOfNumbers[6]
			. $arrayOfNumbers[7]
			. $arrayOfNumbers[8]
			. $arrayOfNumbers[9];


	return $string;
}

function parseContacts($filename){
	//todo -read file and parse contacts
	//parse means to read every piece of a language

	$contacts = [];

	//open a file
	//read the contents to a $string
	$handle = fopen($filename, 'r');
	$contentString = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$arrayOfContents = explode("\n", $contentsString);
	var_dump($arrayOfContents); 
	foreach($arrayOfContents as $personString){
		$personArray = explode("|", $personString);

		$personArrayWithKeys = [];
		$personArrayWithKeys ['name'] = $personArray[0];
		$personArrayWithKeys ['phone'] = $personArray[1];
		// shorthand for pushing element from right to the left
		//array_push($contacts, $personArray);
		//same as the following
		$contacts[] = $personArrayWithKeys;
	}

	return $contacts;
	//parse out the info
	// return $contacts;
}

var_dump(parseContacts($contacts.txt));