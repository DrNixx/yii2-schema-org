<?php

namespace onix\schemaorg\models;

/**
 * Model for InsuranceAgency
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/InsuranceAgency
 */
class InsuranceAgency extends FinancialService {
	/**
	* @var string Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	*/
	public $feesAndCommissionsSpecification;

}