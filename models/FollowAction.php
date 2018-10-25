<?php

namespace onix\schemaorg\models;

/**
 * Model for FollowAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/FollowAction
 */
class FollowAction extends InteractAction {
	/**
	* @var Organization|Person A sub property of object. The person or organization being followed.
	*/
	public $followee;

}