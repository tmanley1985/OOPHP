<?php

$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

foreach( $cars as $car => $value)
{

	echo $value[0];
}

$people = array
(
	 array
	(
		'name' => 'Thomas',
		'number' => '40399299'
	),

	 array
	(
		'name' => 'Elizabeth',
		'number' => '40399488'
	)
);

foreach ($people as $person) {
	
	echo $person['name'] . $person['number'];
}