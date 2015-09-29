<?php

require './valueObject.php';

class valueObjectTest extends PHPUnit_Framework_Testcase
{
	public function testItValidatesDifficulty()
	{
		$difficulty = new DifficultyLevel('easy');

		$this->assertEquals('easy', $difficulty->difficulty);
	}
}