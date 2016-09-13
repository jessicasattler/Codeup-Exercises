<?php
//Complete the logMessage function so that it has the following features:

// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 2-digit month, and 2-digit day that the log is taking place.
// If the log file for a given day does not yet exist, it should be created. If it already exists, it should be appended to.
// Newer logs should appear at the end of the log file.
// Log entries should match the format:

//   YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE
// The line starts with a date and time. Next is the $logLevel, followed by the $message. Each log entry should be on its own line.

function logMessage($logLevel, $message)
{
	$current = date("Y-m-d");
    // todo - complete this function
	$hourMinSec = date("G-i-s");
    //we concatenate the log with the current date and the file extension.log
    $filename = 'log-'.$current.'.log';
    $handle = fopen($filename, 'a');
    //do I need a forloop here?
   	$whatIsWritten = PHP_EOL.$current." ".$hourMinSec." ".$logLevel." ".$message;
    fwrite($handle, $whatIsWritten);
    fclose($handle);
    
}



function logError($message){
	logMessage('ERROR' , $message);
}

function logInfo($message){
	logMessage('INFO', $message);
}
logError("username or password is incorrect");
logInfo("user logged in succesfully");


//Every time I run php logger.php,  a new date will show up when I run cat log-2016-09-07.log to see if we got what we needed

