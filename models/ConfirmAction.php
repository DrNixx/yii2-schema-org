<?php

namespace onix\schemaorg\models;

/**
 * Model for ConfirmAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ConfirmAction
 */
class ConfirmAction extends InformAction {
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}