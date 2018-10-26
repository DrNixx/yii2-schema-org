<?php
namespace onix\schemaorg\models;

/**
 * Model for ItemAvailability
 *
 * @see http://schema.org/ItemAvailability
 */
class ItemAvailability extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
