<?php
namespace onix\schemaorg\models;

/**
 * Model for AuthorizeAction
 *
 * @see http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction
{
	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}
