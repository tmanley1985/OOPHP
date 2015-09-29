<?php

namespace App;

use App\Hello;

class Say
{
	public function __construct()
	{
		return new Hello();
	}
}

namespace App;

class Hello
{
	public function __construct()
	{
		echo "Hello!";
	}
}

$sayHello = new Say();