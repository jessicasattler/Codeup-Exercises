<?php 

require_once'shapes_test.php';

// In this file create a class named Square that extends Rectangle

// In the new Square class, create a method called perimeter that returns the perimeter of the square.

class Square extends Rectangle
{
	
	public function perimeter()
	{
		return ($this->height * 2) + ($this->width * 2);
	}
}

// Test your new Square class by creating an instance of Square with various matching height and width. Calling the area() method should correctly display the product of height and width. Invoking the new method perimeter() should display the perimeter of the square.

$smallSquare = new Square(20,20);

echo $smallSquare->perimeter() .PHP_EOL;
echo $smallSquare->area() .PHP_EOL;

// Update the Square class to override the parent's constructor by only accepting one attribute (height) and using that to set both $width and $height in your class.

