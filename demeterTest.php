<?php

class Staff
{
	public $person;

	public function __construct(Person $person)
	{
		$this->person = $person;
	}

	public function getGreeting()
	{
		return (string) $this->person->getGreeting();
	}
}

class Person
{
	public $greeting;

	public function __construct(Greeting $greeting)
	{
		$this->greeting = $greeting;
	}

	public function getGreeting()
	{
		return $this->greeting->greeting;
	}
}

class Greeting
{
	public $greeting;

	public function __construct($greeting)
	{
		return $this->greeting = $greeting;
	}

}


$staff = new Staff( new Person( new Greeting('Hey') ) );



echo $staff->getGreeting();

