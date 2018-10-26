<?php
namespace onix\schemaorg\models;

/**
 * Model for JoinAction
 *
 * @see http://schema.org/JoinAction
 */
class JoinAction extends InteractAction
{
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}
