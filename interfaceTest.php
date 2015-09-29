<?php

interface CalculatorInterface
{
	public function add($numbers = []);

	public function subtract($numbers = []);

	public function multiply($numbers = []);

	public function divide($numbers = []);
}

class Calculator implements CalculatorInterface
{
	public function add($numbers = [])
	{
		if(!isset($numbers)){ echo 'Add some numbers!'; die();}
		if(count($numbers) == 1){ echo 'Add at least two numbers'; die();}
		foreach ($numbers as $number) {
			
			$total = (int) $number += $number;
		}

		return $total;
	}

	public function subtract($numbers = [])
	{

	}

	public function multiply($numbers = [])
	{

	}

	public function divide($numbers = [])
	{

	}
}

$calculator = new Calculator();

echo $calculator->add([1,2,3]);


