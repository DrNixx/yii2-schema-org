<?php
namespace onix\schemaorg\models;

/**
 * Model for ReturnAction
 *
 * @see http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction
{
	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}
