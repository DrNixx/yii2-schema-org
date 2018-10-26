<?php
namespace onix\schemaorg\models;

/**
 * Model for OrganizationRole
 *
 * @see http://schema.org/OrganizationRole
 */
class OrganizationRole extends Role
{
	/**
	* @var integer A number associated with a role in an organization, for example, the number on an athlete's jersey.
	*/
	public $numberedPosition;

}
