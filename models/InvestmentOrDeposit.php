<?php
namespace onix\schemaorg\models;

/**
 * Model for InvestmentOrDeposit
 *
 * @see http://schema.org/InvestmentOrDeposit
 */
class InvestmentOrDeposit extends FinancialProduct
{
	/**
	* @var MonetaryAmount|integer The amount of money.
	*/
	public $amount;

}
