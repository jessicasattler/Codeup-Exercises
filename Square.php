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
		return ($this->height * 4);
	}

	public function area()
	{
		return $this->height * $this->height;
	}
}

// Test your new Square class by creating an instance of Square with various matching height and width. Calling the area() method should correctly display the product of height and width. Invoking the new method perimeter() should display the perimeter of the square.

$smallSquare = new Square(20,20);

echo "This is the square ".$smallSquare->perimeter() .PHP_EOL;
echo "This is the square ".$smallSquare->area() .PHP_EOL;



