<?php

final class Country
{
	
	public $country;

	public function __construct($country)
	{
		$this->country = $country;
	}

	/**
	 * Method determines what happens when object is treated as string
	 * [__toString description]
	 * @return string [description]
	 */
	public function __toString()
	{
		return $this->country;
	}
}

$canada = new Country('Canada');

echo $canada;