<?php 

//  We are going to be using this file to calculate the area of a rectangle. Remember, the area of a rectangle is calculated by multiplying the width by the height.
// area = height * width

// In this new file, create a class named Rectangle that contains

// the properties $height and $width
// a constructor to set the height and width on instantiation
// a method named area() that returns the area based on the height and width.

// Visibility:
// Update the Rectangle class from the previous lesson to contain private properties for height and width.

// Before testing the Rectangle and Square classes, try to think of the outcomes before executing. Will the Rectangle class work as before? What about the Square class? Create objects from both classes and execute the area() method. Did the result meet your expected outcome?

class Rectangle
{
	protected $height;
	protected $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area()
	{
		return $this->height *  $this->width;
	}

	public function perimeter(){
		return ($this->height * 2) + ($this->width * 2);
	}
}