<?php
namespace onix\schemaorg\models;

/**
 * Model for DepositAccount
 *
 * @see http://schema.org/DepositAccount
 */
class DepositAccount extends BankAccount
{
	/**
	* @var MonetaryAmount A minimum amount that has to be paid in every month.
	*/
	public $accountMinimumInflow;

	/**
	* @var MonetaryAmount An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
	*/
	public $accountOverdraftLimit;

	/**
	* @var string The type of a bank account.
	*/
	public $bankAccountType;

}
