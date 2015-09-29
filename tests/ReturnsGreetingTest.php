<?php

require './ReturnsGreeting.php';

class ReturnsGreetingTest extends PHPUnit_Framework_Testcase
{
	public function testItCanReturnGreeting()
	{
		$greeting = new ReturnsGreeting('Hi!');

		$this->assertEquals('Hi!', $greeting->greeting);
	}
}