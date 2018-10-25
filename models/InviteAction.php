<?php

namespace onix\schemaorg\models;

/**
 * Model for InviteAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/InviteAction
 */
class InviteAction extends CommunicateAction {
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}