<?php
namespace onix\schemaorg\models;

/**
 * Model for OrderStatus
 *
 * @see http://schema.org/OrderStatus
 */
class OrderStatus extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
