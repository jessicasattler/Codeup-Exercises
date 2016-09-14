<?php 
class Log{

	public $filename;
	public $datetime;
	public $handle;

	function __construct($prefix = 'log')
	{
		$this->datetime = date("Y-m-d");
		$this->filename = "$prefix-{$this->datetime}.log";
		$this->handle = fopen($this->filename, "a");
	}

	function __destruct()
	{
		fclose($this->handle);
	}

	function logMessage($logLevel, $message)
	{
	    $string = "{$this->datetime} $logLevel $message".PHP_EOL;
	    fwrite($this->handle, $string);
	}

	function info()
	{
		$this->logMessage("INFO", "This is the first info message.");
	}

	function error()
	{
		$this->logMessage("ERROR", "This is the second info message.");
	}

}