<?php
namespace onix\schemaorg\models;

/**
 * Model for AutomatedTeller
 *
 * @see http://schema.org/AutomatedTeller
 */
class AutomatedTeller extends FinancialService
{
	/**
	* @var string Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	*/
	public $feesAndCommissionsSpecification;

}
