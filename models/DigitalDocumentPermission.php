<?php
namespace onix\schemaorg\models;

/**
 * Model for DigitalDocumentPermission
 *
 * @see http://schema.org/DigitalDocumentPermission
 */
class DigitalDocumentPermission extends Intangible
{
	/**
	* @var Audience|ContactPoint|Organization|Person The person, organization, contact point, or audience that has been granted this permission.
	*/
	public $grantee;

	/**
	* @var DigitalDocumentPermissionType The type of permission granted the person, organization, or audience.
	*/
	public $permissionType;

}
