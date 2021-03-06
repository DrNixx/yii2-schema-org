<?php
namespace onix\schemaorg\models;

/**
 * Model for BusinessEntityType
 *
 * @see http://schema.org/BusinessEntityType
 */
class BusinessEntityType extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
