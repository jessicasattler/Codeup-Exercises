<?php 
 // Create a shapes_test.php file next to Rectangle.php. In shapes_test.php make sure to require_once Rectangle.php

require_once 'Rectangle.php';

// Test your new class by creating an instance of Rectangle with various heights and widths. Calling the area method should correctly display the product of height and width.

$smallRectangle = new Rectangle(15,10);

echo "This uses rectangle class and is small ".$smallRectangle->area() .PHP_EOL;

//Visibility:
// Before testing the Rectangle and Square classes, try to think of the outcomes before executing. Will the Rectangle class work as before? What about the Square class?  .Create objects from both classes and execute the area() method. Did the result meet your expected outcome?

$largeRectangle = new Rectangle(25,10);
echo "This uses rectangle class and is large ".$largeRectangle -> area() .PHP_EOL;