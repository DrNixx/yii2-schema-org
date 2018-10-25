<?php

namespace onix\schemaorg\models;

/**
 * Model for ContactPointOption
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ContactPointOption
 */
class ContactPointOption extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}