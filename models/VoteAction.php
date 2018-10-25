<?php

namespace onix\schemaorg\models;

/**
 * Model for VoteAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction {
	/**
	* @var Person A sub property of object. The candidate subject of this action.
	*/
	public $candidate;

}