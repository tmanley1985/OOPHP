<?php
class DifficultyLevel
{
	private $difficultyList = [];
	public $difficulty;

	public function __construct($difficulty)

	{
		$this->difficulty = trim(strtolower($difficulty));
		$this->difficultyList = ['easy', 'intermediate', 'advanced'];

		if(! in_array($this->difficulty, $this->difficultyList))
		{
			echo 'Not in the list';
		}else{
			return $this->difficulty;
		}

	}
}
class Homework
{
	public $title;
	public $difficulty;

	public function __construct($title, DifficultyLevel $difficultyLevel)
	{
		$this->title = $title;
		$this->difficulty = $difficultyLevel->difficulty;

	}
}

$difficultyLevel = new DifficultyLevel('easy');
$homework = new Homework('History', $difficultyLevel);
echo '<pre>';
var_dump($homework->title);
var_dump($homework->difficulty);
echo '</pre>';




