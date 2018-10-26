<?php
namespace onix\schemaorg\models;

/**
 * Model for GenderType
 *
 * @see http://schema.org/GenderType
 */
class GenderType extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
