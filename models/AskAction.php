<?php

namespace onix\schemaorg\models;

/**
 * Model for AskAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction {
	/**
	* @var Question A sub property of object. A question.
	*/
	public $question;

}