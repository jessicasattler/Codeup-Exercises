<?php


function formatPhoneNumber($number) {
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

function parseContacts($filename)
{
    // todo - read file and parse contacts
    $contacts = [];

    // open a file
    // read the contents to a string
    $handle = fopen($filename, 'r');
    $contentString = trim(fread($handle, filesize($filename)));
    fclose($handle);

    $arrayOfContents = explode("\n", $contentString);
    foreach($arrayOfContents as $personString) {
        $personArray = explode("|", $personString);

        $personArrayWithKeys = [];
        $personArrayWithKeys['name'] = $personArray[0];
        $personArrayWithKeys['phone'] = formatPhoneNumber($personArray[1]);

        // $contacts[] = $personArray is the same thing as array_push($contacts, $personArray);
        $contacts[] = $personArrayWithKeys;

    }
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
