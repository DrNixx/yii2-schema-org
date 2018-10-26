<?php
namespace onix\schemaorg\models;

/**
 * Model for CommentAction
 *
 * @see http://schema.org/CommentAction
 */
class CommentAction extends CommunicateAction
{
	/**
	* @var Comment A sub property of result. The Comment created or sent as a result of this action.
	*/
	public $resultComment;

}
