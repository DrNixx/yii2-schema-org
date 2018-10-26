<?php
namespace onix\schemaorg\models;

/**
 * Model for PlayAction
 *
 * @see http://schema.org/PlayAction
 */
class PlayAction extends Action
{
	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var Event Upcoming or past event associated with this place, organization, or action. Supersedes events.
	*/
	public $event;

}
