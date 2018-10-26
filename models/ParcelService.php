<?php
namespace onix\schemaorg\models;

/**
 * Model for ParcelService
 *
 * @see http://schema.org/ParcelService
 */
class ParcelService extends DeliveryMethod
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
