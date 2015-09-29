<?php

class MainClass
{
	public static function getNewSelf()
	{
		return new self();
	}

	public static function getNewStatic()
	{
		return new static();
	}
}

/**
* 
*/
class SubClass extends MainClass
{
	
}

echo get_class(MainClass::getNewSelf());
echo get_class(MainClass::getNewStatic());
echo get_class(SubClass::getNewSelf());
echo get_class(SubClass::getNewStatic());