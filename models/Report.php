<?php

namespace onix\schemaorg\models;

/**
 * Model for Report
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/Report
 */
class Report extends Article {
	/**
	* @var string The number or other unique designator assigned to a Report by the publishing organization.
	*/
	public $reportNumber;

}