<?php
namespace onix\schemaorg\models;

/**
 * Model for InformAction
 *
 * @see http://schema.org/InformAction
 */
class InformAction extends CommunicateAction
{
	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}
