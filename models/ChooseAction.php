<?php

namespace onix\schemaorg\models;

/**
 * Model for ChooseAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction {
	/**
	* @var string|Thing A sub property of object. The options subject to this action. Supersedes option.
	*/
	public $actionOption;

}