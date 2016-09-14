<?php 

//this is the blueprint to an apartment for example
//log_test.php is the specific apartment for example, for a blue apartment

//  At the top of log_test.php, be sure to require_once 'Log.php';.
require_once 'Log.php';

// Create an instance of the Log class
$logCopy = new Log("cli");

// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
// Call the methods logMessage(), info(), and error() with to test the functionality of each.

//the $logCopy is very much like "$this" but in the instance (the copy of the class), we can't use "$this" in the instance. Always refer to the class in the copy by whatever name we are calling in the copy. In this case that name is $logCopy.
$logCopy->error('username or password is incorrect');
$logCopy->info('user logged in succesfully');


//to check that the copy is working the way it should, run log_test.php in the command line, do an ls,  then cat and copy and paste the name of the new file that was just created with today's date

?>