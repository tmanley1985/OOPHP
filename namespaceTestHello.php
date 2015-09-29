<?php 
namespace App;

class Hello
{
	public function __construct()
	{
		echo "Hello!";
	}
}

// If Product does not exist, set purchase as a new object

if (!$productExists = App\Purchase::where('NeurolinqID', "=", $neurolinqid)->where('ProductID', "=", $orderitem['itemid'])) {
	$purchase = new App\Purchase();
}
