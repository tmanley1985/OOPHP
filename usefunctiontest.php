<?php

function callPerson()
{
	$person = "Adam";
	$home = true;

	$callback = function() use($person)
	{
		echo $person;
	};	

	 return $callback();
}

callPerson();	

$lambda = function () { echo "Hello World!\n"; };

$lambda ();

//If there is an & symbol in front of the variable in the use () part of a lambda, the variable will be a reference
//instead of a copy.  References will allow for changes to the variables in the parent scope as well.  Copies are merely
//copies of the original variables.