<?php

class BankAccount
{
	private $accountType;

	private function __construct($accountType)
	{
		$this->accountType = $accountType;
	}

	public static function openAccount ($accountType)
	{
		return new BankAccount($accountType);
	}
}

$newBankAccount = BankAccount::openAccount('checking');

var_dump($newBankAccount);