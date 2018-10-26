<?php
namespace onix\schemaorg\models;

/**
 * Model for GiveAction
 *
 * @see http://schema.org/GiveAction
 */
class GiveAction extends TransferAction
{
	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}
