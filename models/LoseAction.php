<?php

namespace onix\schemaorg\models;

/**
 * Model for LoseAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction {
	/**
	* @var Person A sub property of participant. The winner of the action.
	*/
	public $winner;

}