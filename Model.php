<?php 
//Create a Model class 

// Add a new protected static property named $table. This table property will be used to let our model know which database table we will be representing.

//In the Model class, add a static method named getTableName() that returns the value of the static property $table.

class Model
{
	// An attributes property (array) that is not visible outside of the class
	protected $data = [];
	protected static $table = 'users';

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

	public static function getTableName()
	{
		//if I return self::$table instead of return static::$table,
		//the child class will not be able to overwrite the parent class
		//we would see users being returned versus users2, how it's overwritten in the child class
		return static::$table;
	}

}

//this is part of the magic, that we can name the property anything we want and it will be added
$md = new Model();
$md->name = 'John Smith';
$md->group = ['Colony','House','Settlement'];
$md->age = 100;

echo $md->name.PHP_EOL;
var_dump($md->group);
echo $md->age.PHP_EOL;






















