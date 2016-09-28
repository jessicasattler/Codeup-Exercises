<?php 

require_once'shapes_test.php';

// In this file create a class named Square that extends Rectangle

// In the new Square class, create a method called perimeter that returns the perimeter of the square.

// Update the Square class to override the parent's constructor by only accepting one attribute (height) and using that to set both $width and $height in your class.

// Update the constructor in Square to instead pass height on to the parent's constructor.


// Add a perimeter() method to your Rectangle class, and an area() method to your Square class. Neither of these should call a parent. Which method is overriding? Which one is a base method?

class Square extends Rectangle
{
		public function __construct($height)
	{
		parent::__construct($height,$height);
	}

	public function perimeter()
	{
		return ($this->getHeight() * 4);
	}

	public function area()
	{
		return $this->getHeight() * $this->getHeight();
	}
}

// Test your new Square class by creating an instance of Square with various matching height and width. Calling the area() method should correctly display the product of height and width. Invoking the new method perimeter() should display the perimeter of the square.

$smallSquare = new Square(20,20);

echo "This is the square and is small ".$smallSquare->perimeter() .PHP_EOL;
echo "This is the square and is small ".$smallSquare->area() .PHP_EOL;

//Visibility:
// Before testing the Rectangle and Square classes, try to think of the outcomes before executing. Will the Rectangle class work as before? What about the Square class?  .Create objects from both classes and execute the area() method. Did the result meet your expected outcome?


$largeSquare = new Square (40,40);

echo "This is uses square class and is large ".$largeSquare->area() .PHP_EOL;
