<?php
namespace onix\schemaorg\models;

/**
 * Model for LockerDelivery
 *
 * @see http://schema.org/LockerDelivery
 */
class LockerDelivery extends DeliveryMethod
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
