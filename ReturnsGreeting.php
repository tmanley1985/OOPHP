<?php

class ReturnsGreeting
{
	public $greeting;

	public function __construct($greeting)
	{
		$this->greeting = $greeting;

		return $this->greeting;
	}
}