<?php

namespace onix\schemaorg\models;

/**
 * Model for OfferItemCondition
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/OfferItemCondition
 */
class OfferItemCondition extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}