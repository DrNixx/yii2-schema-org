<?php
namespace onix\schemaorg\models;

/**
 * Model for PublicationEvent
 *
 * @see http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event
{
	/**
	* @var boolean A flag to signal that the item, event, or place is accessible for free. Supersedes free.
	*/
	public $isAccessibleForFree;

	/**
	* @var Organization|Person An agent associated with the publication event.
	*/
	public $publishedBy;

	/**
	* @var BroadcastService A broadcast service associated with the publication event.
	*/
	public $publishedOn;

}
