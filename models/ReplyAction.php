<?php
namespace onix\schemaorg\models;

/**
 * Model for ReplyAction
 *
 * @see http://schema.org/ReplyAction
 */
class ReplyAction extends CommunicateAction
{
	/**
	* @var Comment A sub property of result. The Comment created or sent as a result of this action.
	*/
	public $resultComment;

}
