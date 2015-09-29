<?php

$food = [
	'items' => array()
];

$food_items = ['hotdog', 'chicken', 'hamburger'];

foreach ($food_items as $food_item) {
	$food['items'][] = array('FoodItem' => $food_item);
}


$days = [];
$days = [
	'first' => 'monday',
	'second' => 'tuesday'
];

$days['third'] = 
 'wednesday'
;

$cars = [];

$cars = [
	'Ford' => 'Mustang',
	'Chevy' => 'Tahoe'
];
$honda = ['Honda' => 'Accord'];
array_push($cars, $honda);

echo "<pre>";
	var_dump($food);
	var_dump($days);
	var_dump($cars);
echo "<pre>";