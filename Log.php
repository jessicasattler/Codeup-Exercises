<?php 
//Create a file in your exercises directory called Log.php. The naming here is important; this file will contain a class called Log that will be the wrapper for your logger functions. Filenames for classes should match their class name.

//this is the blueprint to an apartment for example
//log_test.php is the specific apartment for example, for a red apartment
class Log{
	public $filename;

	// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle

	public function logMessage($logLevel,$message){
		$current = date("Y-m-d");
		$hourMinSec = date("G-i-s");
		$this->filename = 'log-'.$current.'.log';
		$handle = fopen($this->filename, 'a');
		$whatIsWritten = PHP_EOL.$current." ".$hourMinSec." ".$logLevel." ".$message;
		fwrite($handle, $whatIsWritten);
		fclose($handle);

		// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.

	}
	public function error($message){
		//to access the methods inside of other functions while we are in the class, then use the "$this" keyword
		$this->logMessage('ERROR', $message);
	}

	public function info($message){
		//to access the methods inside of other functions while we are in the class, then use the "$this" keyword
		$this->logMessage('INFO', $message);
	}
//we don't want the methods to be called until we call them in the copies (instances)

}
 ?>
