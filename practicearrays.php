<?php 

//make an array called "Films" , and in that array have 3 arrays with keys corresponding to their movie title and inside of those arrays have 3 elements which will be director, date, and genre


// $films = [

// 	'Titanic'=>['director'=>'James Cameron', 'date'=>'1997', 'genre'=>'romance'],
// 	'Star Wars'=>['director'=>'George Lucas', 'date'=>'1973', 'genre'=>'sci-fi'],
// 	'Space Jam'=>['director'=>'Bugs Bunny', 'date'=>'1999', 'genre'=>'sports-comedy']
// ];

//Print out for example, "The director of Titanic is James Cameron"

	
	// foreach($films as $film  => $filmDetails){
	// 	foreach ($filmDetails as $key => $value){
	// 		echo "The {$key} of {$film} is {$value}".PHP_EOL.PHP_EOL;  
	// 	}
	// }

//Just access Star Wars
	// foreach($films['Star Wars'] as $key => $value){
	// 	echo "The {$key} of 'Star Wars' is {$value}" .PHP_EOL;
	// }


////

// $movies = [
	
// 	'Western'=> [
// 			['name'=>'The Searchers','director'=>'John Ford', 'date'=>'1956'],
// 			['name'=>'Jane Got a Gun', 'director'=>'Gavin O\'Connor', 'date'=>'2016'],
// 			['name'=>'The Good,the Bad,and the Ugly', 'director' =>'Sergio Leon','date'=>'1966'],
// 	],
// 	'Sci-Fi'=> [
// 			['name'=>'It','director'=>'Tommy Lee','date'=>'1990'],
// 			['name'=>'The Thing', 'director'=>'Wes Crabin','date'=>'1997']

// 	],
// 	'Sports'=>[
// 			['name'=>'The Natural', 'director'=>'Robert Redford', 'date'=>'1984']

// 	],
// ];


	//Print our "In the genre category, we have "name" of the film
	//For each level, we want a foreach loop


	// foreach($movies as $genre =>$genreList){
	// 		echo PHP_EOL."The genre is {$genre}".PHP_EOL;
	// 	foreach($genreList as $film){
	// 		foreach($film as $key =>$value){
	// 			echo "The {$key} is {$value}".PHP_EOL;
	// 		}
	// 	}
	// }

$movies = [
	
	'Western'=> [
			'The Searchers'=>['director'=>'John Ford', 'date'=>'1956'],
			'Jane Got a Gun'=> ['director'=>'Gavin O\'Connor', 'date'=>'2016'],
			'The Good,the Bad,and the Ugly'=> ['director' =>'Sergio Leon','date'=>'1966'],
	],
	'Sci-Fi'=> [
			'It'=>['director'=>'Tommy Lee','date'=>'1990'],
			'The Thing'=> ['director'=>'Wes Crabin','date'=>'1997']

	],
	'Sports'=>[
			'The Natural'=>['director'=>'Robert Redford', 'date'=>'1984']

	],
];



//Output, "the director of The Searchers is John Ford", for example

	foreach($movies as $genre => $genreList){
		echo PHP_EOL."The genre is {$genre}".PHP_EOL;
		foreach($genreList as $filmName => $details){
			echo PHP_EOL;
			foreach($details as $key =>$value){
				echo "The {$key} of {$filmName} is {$value}".PHP_EOL;
			}

		}
	}






