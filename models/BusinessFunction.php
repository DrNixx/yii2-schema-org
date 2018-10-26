<?php
namespace onix\schemaorg\models;

/**
 * Model for BusinessFunction
 *
 * @see http://schema.org/BusinessFunction
 */
class BusinessFunction extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
