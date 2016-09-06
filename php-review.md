# PHP Review

## Notes

## Client vs Server

## Exploding and Imploding

- explode()
- implode()

## Pushing, Popping, and Shifting

- array_push()
- array_pop()
- array_shift()
- array_unshift()

## Array Functions


## Searching in Arrays


## Sorting Arrays


## Using I/O Streams


## PHP CLI arguments

- Using arguments in PHP command line applications

## do-while


## else

- Ternary Operator
- elseif / else if
- Code Standards

## if

- Using if with logical operators
    - Using OR
    - Using AND
    - Using NOT

## while


## Break & Continue

- break
- continue
- Nested Loops

## for

- FizzBuzz

## foreach

- Using foreach

## foreach with keys


## switch

- Default Case
- Falling Through

## Function Arguments

- Default Values
- Validating Arguments

## Functions

- User Defined Functions
- Variable Scope

## Internal (built-in) Functions

- Using Internal Functions

## Arithmetic Operators

- Negation
- Addition
- Subtraction
- Multiplication
- Division    
- Modulus
- Operator Precedence and Grouping

## Assignment Operators

- Basic Assignment Operators
    - Array key assignment
- Combined Operators
- Assignment by Reference

## Comparison Operators

- Equal and Identical
- Less than and Greater than

## Incrementing/Decrementing Operators

- Using Incrementing/Decrementing Operators

## Logical Operators

- And and Or
    - Operator Precedence
- Not

## Intro to Operators

- Math in Shell
- Exiting the shell
- Strings
    - Hello World
- PHP Interactive Shell
    - Check the version of PHP  in shell

## PHP II

- Running PHP Scripts

## Data Types - Boolean


## Data Types in PHP

- Variables

## Numbers in PHP

- Integers
- Floats

## Strings

- Single Quotes
- Concatenation
- Escape characters

## Type Juggling


## Constants

- Using Constants

## Arrays

- Basic Syntax
    - New Syntax
- Data Types
- Associative Arrays
- Multi-dimensional Arrays
- Overview

## Strings (continued)

- Double Quotes
- String interpolation
    - The Simple Syntax
    - The Complex Syntax
- Heredoc and Nowdoc

## Objects (and Other Types)

- Variables
- Constants
- Data Types
    - Boolean
    - Integers and Floats
    - Strings
    - Arrays



Notes on some of these topics:

PHP Browser:
    Many ways of different devices communicate to each other, bluetooth to car talks different than email to server. HTTP is a text protocol, is just a plain text protocol, unlike other fancy protocols, these are just strings. We make a request to a website we get a long string with angle brackets and the browser turns that into a page we can a see (that is generated on the server and sent to the browser). 

    The broswer doesn't know about PHP, it doesn't run it, it just sees an html we generate with PHP and it it know to turn that HTML document into something we can see. Short answer: browswer has nothing to do with PHP. Javascript runs on the browser, PHP runs on the server. We don't run PHP on the browswer. 

    A file that ends with php tells the browser that we need to run PHP code somewhere else. Like when we wrote just html on php forms, but if there is something inside the php tags, that code will be run before the HTML code is run. PHP runs through a document and will find the PHP tags and anything inside those PHP tags will be evaluated as PHP. If php is inside of a loop, that will run over and over again. 

    If I have a .php file like this:

        $someVariable = 'something';

        echo $someVariable;

    if we run the previous code without the PHP tags, PHP won't know it's php and will just run the code as text
    It know it's PHP once we put them inside PHP tags



Variable Scope in PHP, local vs global PHP:
    <?php

    $global = 42;

    function doThings(){
        var_dump($global);
    }

    doThings();

    the previous code will not run, any variables declared outside of the function, we don't have acess to, only the ones declared inside the function. Variables outside the function will not work either outside. The only way a global variable will work is if we pass it to the function:

    <?php

    $global =42;

    function doThings($parameter){


    }
    doThings($global);

    Also, return lets us get things out of the function

        <?php

    $global =42;

    function doThings($parameter){
    
        return $local;
    }
    $result = doThings();

    var_dump($result); //we will get 'some string'

    $local only exists inside of the function unless we set the return value to a new variable outside of the function

    We haven't gone over this yet but php has some superglobal variables that will work in any scope but it's discouraged to make those ourselves

Built in functions for output, 'print_r' vs 'var_dump' vs 'fwrite' vs 'echo'
    
    var_dump, print_r -> debugging
    fwrite -> write to file
    echo -> can't write to files but we use it to display info to the user and to generate HTML to PHP

Type Juggling
    Converting from one data type to another.
    we've seen this with our type casting, for example:
    (int)'42' we change the string into an integer

    Php will also do type juggling behind the scenes in certain situations ex:

    '42' == 42
    php will juggle the data types in the background so that in can compare things 

    We also use this in :
    if('some string')
    converts whatever is inside of the if statement, converts it into a boolean, either true or false

Isset
    is a built in function in PHP that lets us see if there's something in an array depending on whether or not it's in an array
    If we need to manipulate some item in an array, but we don't know if it exists, we should check if it exists first for example:

    if I want to do something the user passed into the command line but I don't know if that value exists, we would do 

        if (isset($argv[1])){
            //do something with $argv[1]
            $max = $argv[1];
        }else {
            $max = 100;
        }
        //same as

        $max = (isset($argv[1])) ? argv[1] : 100;

        $max = (isset($argv))
    we want to write code that will code if user inputs something or if user does not
Heredoc and Nowdoc
    formatting?
    way to create big string literals
    we will have an identifier in single quotes if we want a HEREDOC 

    $myString = <<<HEREDOC
    here is some string contents
        here is some contents
    HEREDOC;
    we wil have anything between that identifier and closing in the file then we will be able to print that out and we can get once inside. We won't use them a whole lot but we will usually have better tools to do what we want than a heredoc and nowdoc.

Objects and Other Types:
    the other big data type will be objects which will get into PHP 3 this week or next week. They're essentially an object that is created from a blueprint. Take away from Objects is to know that it is similar to an array, it will be a collection of things but it is something different from an array. 

Multidimensional Arrays
    is an array of arrays, we've said an array is a list of things, numbers, strings, collection of integers, it can be a collection of collections (array of arrays).

    there are some very computer sciency things we can do for arrays, we can hear like matrix, it's an array with no keys but we won't go over that that much because it's not very practical in web development as multidimensional arrays. 

    [
        ['name'=>'zach', 'favorite language'=>'php'],
        ['name'=>'hector', 'favorite language'=>'js'],
        ['name'=>'mittsy', 'favorite language'=>'python'],

    ];
    //that last comma isn't necessary but if we want to add more items to the list then you don't want to forget adding it

    foreach($people as $person){
        //write the html for a table
        echo $person['name']. "'s favorite langauage is ".$person['favorite langauge'].PHP_EOL;
    }

Searching and foreach
    foreach($array as $value){

        //$value will refer to the elements in the array 
        echo $value 
    }
    
    foreach($array as $key => $value){
        echo $key. $value . PHP_EOL;
    }

Indexed vs associative arrays 
    associative arrays are named index, if we don't give them index then php will automatically give them numeric indexes: 0 1 2 3

    $numbers = [1,2,3,4,5];
    $numbers['favorite food']=> 'coffee';

    what if some indexes were named and others weren't, don't do it:

$me = [
    'name' => 'zach',
    'favorite language'=> 'ruby',

] 
$me['favorite food']=>'cofee';

$numbers[3] = 42;
$numbers[5]= 6; //shorthand for pushing just one item into an array
























