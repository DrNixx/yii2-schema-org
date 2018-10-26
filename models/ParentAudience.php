<?php
namespace onix\schemaorg\models;

/**
 * Model for ParentAudience
 *
 * @see http://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience
{
	/**
	* @var integer Maximal age of the child.
	*/
	public $childMaxAge;

	/**
	* @var integer Minimal age of the child.
	*/
	public $childMinAge;

}
