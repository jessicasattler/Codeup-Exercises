<!-- Most common scenario for writing files is log files and handling exports of data to take all the valuable data in the web app and share it out as a spreadsheet

Think of a pointer as a cursor at the beginning of a file. 
If the file does not exist, it attempts to create it the modes who say this do this, such as 'a'.

Storage is very easy to store, very cheap, so it would be hard to think of a scenario with 'w' mode but there is a scenario out there. Try to stick to r and a -->
<!-- 
//cat spits out the contents of a file so it would be cat cities.txt -->
<!-- log files are very useful and there's a folder for all of our .dev's , one file is called access and the other is error. The log tells us what type of request it was and a timestamp, the protocol and the status code was (which is some sort of redirect. It says Mozzilla, Intel Mac - all this is user agent string, this is an access log of every browser that has visited our .dev so our Mac, it looks like it has every browser listed, so you take the string and go to useragentstring and their logs tells them about the person, we can look into our own logs to understand.) This way we can see what PHP was upset about -->

<?php
$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$string = PHP_EOL."San Antonio, TX \n Chicago, IL";

$filename = 'cities.txt';

//functions, if it can be helped, it's best to keep functions at 3 arguments or less
function writeString($filename, $string){
$handle = fopen($filename, 'a');
//fwrite takes a string
//if you want an array of strings then use a foreach loop to read them one at a time
fwrite($handle, $string);
fclose($handle);
date("Y-M-D");//think of this as the date of the server 
}

writeString($filename, $string);
