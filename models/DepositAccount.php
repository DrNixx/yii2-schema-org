<?php

namespace onix\schemaorg\models;

/**
 * Model for DepositAccount
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/DepositAccount
 */
class DepositAccount extends BankAccount {
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

}