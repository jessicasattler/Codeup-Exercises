<?php 

 $myShows = array(
 	"Clarence"=>array(
 		"Channel" => "Cartoon Network",
 		"Genre" => "Cartoon"
 	),
 	"Supernatural"=>array(
 		"Channel" => "CW",
 		"Genre" => "Horror" 
 	),

 	"Stranger Things" => array(
 		"Channel" => "Netflix",
 		"Genre" => "Sci-fi"
 		)

);

 //Print out the information for each show


 foreach($myShows as $show => $showDetails){
 	echo "The name of the show is {$show}".PHP_EOL;
 	foreach ($showDetails as $key => $value){
 		echo "{$key} - {$value}".PHP_EOL;
 	}
 	echo PHP_EOL;
 }

 //Only print the show that has a genre of horror:

 foreach($myShows as $show => $showDetails){
 	if($showDetails['Genre'] == 'Horror'){
 		echo $show.PHP_EOL;
 		foreach($showDetails as $key => $value){
 		echo "{$key} - {$value}".PHP_EOL;
 		}
 	}
 }