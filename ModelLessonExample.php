
<?php  
//zach's way
class Model2
{
	protected $attributes = [];

// 	//this is called when we define the property, like in the previous example when we did : $md->name = 'John Smith';
	public function __set($nameOfProperty, $value)
	{
		$this->attributes[$nameOfProperty] = $value;
	}

	public function __get($nameOfThePropertyWeAreTryingToGet)
	{
// 		//isset does the same thing the array_key_exists
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