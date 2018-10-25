<?php

namespace onix\schemaorg\models;

/**
 * Model for CreditCard
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/CreditCard
 */
class CreditCard extends PaymentCard {
	/**
	* @var MonetaryAmount|integer The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
	*/
	public $monthlyMinimumRepaymentAmount;

}