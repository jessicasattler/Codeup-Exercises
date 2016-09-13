<?php 
//Create a file in your exercises directory called Log.php. The naming here is important; this file will contain a class called Log that will be the wrapper for your logger functions. Filenames for classes should match their class name.

//this is the blueprint to an apartment for example
//log_test.php is the specific apartment for example, for a red apartment
class Log{
	public $filename;
	public $handle;
	public $datetime;

	// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle

	public function logMessage($logLevel,$message){
		// $current = date("Y-m-d");
		// $hourMinSec = date("G-i-s");
		// $this->filename = 'log-'.$current.'.log';
		// $this->handle = fopen($this->filename, 'a');
		// $whatIsWritten = PHP_EOL.$current." ".$hourMinSec." ".$logLevel." ".$message;
		// fwrite($this->handle, $whatIsWritten);
		// fclose($this->$handle);

		// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
		$string = "{$this->datetime} $logLevel $message".PHP_EOL;
		fwrite($this->handle, $string);

	}
	public function error($message){
		//to access the methods inside of our class while we are in the class, then use the "$this" keyword 
		$this->logMessage('ERROR', $message);
	}

	public function info($message){
		//to access the methods inside of our class while we are in the class, then use the "$this" keyword
		$this->logMessage('INFO', $message);

	}
	//we don't want the methods to be called until we call them in the copies (instances)

	// constructor:
	// takes in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.
	public function __construct($prefix = 'log'){
		//Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
		// $this->filename = $prefix-YYYY-MM-DD.log;
		// //Open the $filename for appending and assign the file pointer to the property $handle
		// $this->handle = fopen($this->filename, 'a');

		$this->datetime = date("Y-m-d");
		$this->filename = "$prefix-($this->datetime).log";
		$this->handle = fopen($this->filename, "a");

	}

	//Add a destructor to close $handle when the class is destroyed.
	public function __destruct(){
		fclose($this->handle);
	}



}
 ?>
