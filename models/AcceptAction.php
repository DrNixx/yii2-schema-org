<?php
namespace onix\schemaorg\models;

/**
 * Model for AcceptAction
 *
 * @see http://schema.org/AcceptAction
 */
class AcceptAction extends AllocateAction
{
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}
