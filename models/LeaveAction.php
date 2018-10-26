<?php
namespace onix\schemaorg\models;

/**
 * Model for LeaveAction
 *
 * @see http://schema.org/LeaveAction
 */
class LeaveAction extends InteractAction
{
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}
