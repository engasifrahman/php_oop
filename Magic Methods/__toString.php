<?php

/**
 * ?__toString()
 * 
 * __toString() is invoked when an object of a class is treated as a string.
 * The __toString() method accepts no parameter and returns a string.
 * 
 * When you use an object as it were a string, PHP will automatically call 
 * the __toString() magic method. If the method doesn’t exist, PHP raises an error.
 */
class BankAccount
{
	private $accountNumber;

	private $balance;

	public function __construct(
		$accountNumber,
		$balance
	) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}

	public function __toString()
	{
		return "Bank Account: $this->accountNumber. Balance: $$this->balance";
	}
}


$account = new BankAccount('123456789', 100);
echo $account;