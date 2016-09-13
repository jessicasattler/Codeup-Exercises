<?php

// class - blueprint
//   - rules that describe what an object will look like
//   - contains the 'shape' of the data, but not specific values

// object - combination of state and behavior
//   - has properties (state)
//   - has methods, i.e. functions that belong to a class (behavior)

// instance - an object created from a blueprint
//   - blue print for a house is a class, the house itself is an object that is
//     an instance of that class

// public keyword - describes visibility of properties and methods
//   - don't worry about it too much right now, just know that it is required
//     and we'll cover it in more detail later

// best practices and naming conventions
//   - class names are PascalCase
//   - each class definition is in a separate file that is named the same as the
//     class with a `.php` extension
//     - I'm breaking this rule in this example code
//  - class names must be unique... kind of.
//    - mistruth in the curriculum

// class definition syntax
class ClassName { /* properties and methods */ }

// $this - refers to the instance of the object *inside of a class definition*

// creating a new instance of a class
$object = new ClassName();

// accessing properties or methods on an object
//   object operator '->'
$object->property;
$object->method($param1, $param2);

class Student 
{
    public $name;
    public $grades;

    public function sayHello()
    {
        return 'Hello from ' . $this->name . '!';
    }

    public function getGradeAverage()
    {
        if (count($this->grades) == 0) {
            return 0;
        }
        $sum = 0;
        foreach ($this->grades as $grade) {
            $sum += $grade;
        }
        return $sum / count($this->grades);
    }
}
$billy = new Student();

$billy->name = 'billy';
$billy->favoriteLanguage = 'PHP';

$billy->grades = [90, 89, 78];
$billy->grades[] = 82;

$billyBob = new Student();

$billyBob->grades = [77, 81, 72];
$billyBob->grades[] = 82;

echo "Billy's average is {$billy->getGradeAverage()}" . PHP_EOL;
echo "Billy Bob's average is {$billyBob->getGradeAverage()}" . PHP_EOL;

class Car
{
    public $make;
    public $model;
    public $color;
    public $vin;
    public $acceleration;
    public $topSpeed;
    public $speed;

    public function honk()
    {
        return 'honk, honk';
    }

    public function honkLoudly()
    {
        return 'HONK, HONK!';
    }

    public function accelerate($time)
    {
        $this->speed += $this->acceleration * $time;
    }

    public function getDescription()
    {
        return "Make: {$this->make}. Model: {$this->model}";
    }

}


$lassensCars = [];

$michaelsCar = new Car();
$michaelsCar->make = 'acura';
$michaelsCar->model = 'integra';
$lassensCars[] = $michaelsCar;

$dansCar = new Car();
$dansCar->make = 'GMC';
$dansCar->model = 'sierra';
$lassensCars[] = $dansCar;

foreach ($lassensCars as $car) {
    echo $car->getDescription() . PHP_EOL;
}
