<?php

class Email 
{
	public $email;

	public function __construct($email){

		$this->email = $email;
	}
}

class FilterEmail
{

	public function __construct(Email $email){

		if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Not a real email";
		}

		$this->email = $email;
	}
}

$email = new Email('tmanley1985@gmail.com');
$emailFilter = new FilterEmail($email);

