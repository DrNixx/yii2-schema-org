<?php
namespace onix\schemaorg\models;

/**
 * Model for BroadcastEvent
 *
 * @see http://schema.org/BroadcastEvent
 */
class BroadcastEvent extends PublicationEvent
{
	/**
	* @var Event The event being broadcast such as a sporting event or awards ceremony.
	*/
	public $broadcastOfEvent;

	/**
	* @var boolean True is the broadcast is of a live event.
	*/
	public $isLiveBroadcast;

	/**
	* @var string The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	*/
	public $videoFormat;

}
