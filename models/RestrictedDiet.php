<?php
namespace onix\schemaorg\models;

/**
 * Model for RestrictedDiet
 *
 * @see http://schema.org/RestrictedDiet
 */
class RestrictedDiet extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
