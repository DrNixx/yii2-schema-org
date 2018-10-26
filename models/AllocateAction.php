<?php
namespace onix\schemaorg\models;

/**
 * Model for AllocateAction
 *
 * @see http://schema.org/AllocateAction
 */
class AllocateAction extends OrganizeAction
{
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}
