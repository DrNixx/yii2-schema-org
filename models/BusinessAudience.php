<?php

namespace onix\schemaorg\models;

/**
 * Model for BusinessAudience
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience {
	/**
	* @var QuantitativeValue The number of employees in an organization e.g. business.
	*/
	public $numberOfEmployees;

	/**
	* @var QuantitativeValue The size of the business in annual revenue.
	*/
	public $yearlyRevenue;

	/**
	* @var QuantitativeValue The age of the business.
	*/
	public $yearsInOperation;

}