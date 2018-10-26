<?php
namespace onix\schemaorg\models;

/**
 * Model for AskAction
 *
 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction
{
	/**
	* @var Question A sub property of object. A question.
	*/
	public $question;

}
