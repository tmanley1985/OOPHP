<?php 

$colors = ['red', 'blue', 'yellow'] ;

$items = [];

foreach($colors as $color) {
	array_push($items, $color);
}

var_dump($items);