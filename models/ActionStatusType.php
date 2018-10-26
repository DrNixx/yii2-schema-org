<?php
namespace onix\schemaorg\models;

/**
 * Model for ActionStatusType
 *
 * @see http://schema.org/ActionStatusType
 */
class ActionStatusType extends Enumeration
{
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}
