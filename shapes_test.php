<?php 
 // Create a shapes_test.php file next to Rectangle.php. In shapes_test.php make sure to require_once Rectangle.php

require_once 'Rectangle.php';

// Test your new class by creating an instance of Rectangle with various heights and widths. Calling the area method should correctly display the product of height and width.

$smallRectangle = new Rectangle(15,10);

echo $smallRectangle->area() .PHP_EOL;