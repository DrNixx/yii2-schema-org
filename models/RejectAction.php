<?php

namespace onix\schemaorg\models;

/**
 * Model for RejectAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/RejectAction
 */
class RejectAction extends AllocateAction {
	/**
	* @var MedicalDevicePurpose|Thing A goal towards an action is taken. Can be concrete or abstract.
	*/
	public $purpose;

}