<?php

namespace onix\schemaorg\models;

/**
 * Model for WinAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/WinAction
 */
class WinAction extends AchieveAction {
	/**
	* @var Person A sub property of participant. The loser of the action.
	*/
	public $loser;

}