<?php 

require_once 'Model.php';
//create a User class that extends Model. This class will be very simple, and will only contain the overridden $table property, set to users

class User extends Model 
{
	//we can overwrite the parent class because the getTableName() method returned was returned as static and not as self
	protected static $table = 'users 2'; 
}

echo Model :: getTableName() .PHP_EOL;
echo User :: getTableName() .PHP_EOL;