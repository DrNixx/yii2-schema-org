<?php

namespace onix\schemaorg\models;

/**
 * Model for Enumeration
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/Enumeration
 */
class Enumeration extends Intangible {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}