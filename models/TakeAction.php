<?php
namespace onix\schemaorg\models;

/**
 * Model for TakeAction
 *
 * @see http://schema.org/TakeAction
 */
class TakeAction extends TransferAction
{
	/**
	* @var Place A sub property of location. The original location of the object or the agent before the action.
	*/
	public $fromLocation;

	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}
