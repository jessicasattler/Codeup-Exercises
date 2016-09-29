<?php 

 // We are going to begin to build out a Model class that we will eventually use to connect to a database and store data. Models are the "M" in MVC, a popular design pattern for structuring data-driven web applications.
//Create a Model class 

class Model
{
	// An attributes property (array) that is not visible outside of the class
	private $data = [];

	//Magic setter to populate $data array
	public function __set($name, $value)
	{
		//set the $name key to hold $value in $data
		$this->data[$name] = $value;
	}

	//Magic getter to retrieve values from $data
	public function __get($name)
	{
		//Check for existence of array key $name
		if (array_key_exists($name, $this->data)){
			return $this->data[$name];
		}

		return null;
	}


}

$md = new Model();
$md->name = 'John Smith';
$md->group = 'Colony';
$md->age = 100;

echo $md->name.PHP_EOL;
echo $md->group.PHP_EOL;
echo $md->age.PHP_EOL;


//zach's way
class Model2
{
	protected $attributes = [];

	//this is called when we define the property, like in the previous example when we did : $md->name = 'John Smith';
	public function __set($nameOfProperty, $value)
	{
		$this->attributes[$nameOfProperty] = $value;
	}

	public function __get($nameOfThePropertyWeAreTryingToGet)
	{
		//isset does the same thing the array_key_exists
		if(isset($this->attributes[$nameOfThePropertyWeAreTryingToGet])){
				return $this->attributes[$nameOfThePropertyWeAreTryingToGet];
			}
		return null;
	}


}

$md2 = new Model2();
$md2->nameOfProperty = 'Pocahontas';
$md2->anyPropertyIWantTo = ['any','value','I','want'];

echo $md2->nameOfProperty. PHP_EOL;
var_dump($md2->anyPropertyIWantTo);
var_dump($md2);

