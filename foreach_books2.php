<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

foreach ($books as $book =>$bookDetails){
	echo "The title of the book is {$book}".PHP_EOL;
	foreach($bookDetails as $key =>$value){
		echo "{$key} - {$value}".PHP_EOL;
	}
	echo PHP_EOL;
}
echo "New Exercise".PHP_EOL;

//Update your loop to only show books that were written after 1950.

foreach($books as $book => $bookDetails){
	if(($bookDetails['published'])>1950){
		echo "The title of the book is {$book}".PHP_EOL;
		foreach($bookDetails as $key => $value){
			echo "{$key} - {$value}".PHP_EOL;
		}
	}
	echo PHP_EOL;
}