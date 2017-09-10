<?php 
	// Array of [quote,author] pairs
	$quotes =
	[
		["There is nothing permanent except change.","Heraclitus"],
		["Learning never exhausts the mind.","Leonardo da Vinci"],
		["No act of kindness, no matter how small, is ever wasted.","Aesop"],
		["It is far better to be alone, than to be in bad company.","George Washington"],
		["Ever tried. Ever failed. No matter. Try Again. Fail again. Fail better.","Samuel Beckett"],
		["Not all those who wander are lost.","J. R. R. Tolkien"],
		["Tell me and I forget. Teach me and I remember. Involve me and I learn.","Benjamin Franklin"],
		["To know what you know and what you do not know, that is true knowledge.","Confucius"]
	];

	function getQuote(int $index){
		global $quotes;
		return $quotes[$index][0];
	}

	function getAuthor (int $index){
		global $quotes;
		return $quotes[$index][1];
	}

	// Generate the random quote
	$index = rand(0,count($quotes)-1);