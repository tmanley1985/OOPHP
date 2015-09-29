<?php
/**
 *  Implements IteratorAggregate which requires a getIterator method
 */
class FoodItems implements IteratorAggregate
{

	private $food_items = [];

	public function __construct()
	{
		$this->food_items = ['Hamburger', 'Chicken', 'Meatloaf'];
	}

	public function getIterator()
	{
		return new ArrayIterator( $this->food_items );
	}

}

$food_items = new FoodItems();

foreach ($food_items as $food_item) {
	
	echo $food_item  . ' ';
}

// class Cars 
// {
// 	public $car = [];

// 	public function __construct()
// 	{
// 			$this->cars = ['Mustand', 'Corvette', 'Accord'];
// 	}
// }

// $cars = new Cars();

// foreach( $cars as $car )
// {
// 	echo $car;
// }