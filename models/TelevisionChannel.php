<?php
namespace onix\schemaorg\models;

/**
 * Model for TelevisionChannel
 *
 * @see http://schema.org/TelevisionChannel
 */
class TelevisionChannel extends BroadcastChannel
{
	/**
	* @var string The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
	*/
	public $broadcastChannelId;

	/**
	* @var BroadcastFrequencySpecification|string The frequency used for over-the-air broadcasts. Numeric values or simple ranges e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
	*/
	public $broadcastFrequency;

	/**
	* @var string The type of service required to have access to the channel (e.g. Standard or Premium).
	*/
	public $broadcastServiceTier;

	/**
	* @var string Genre of the creative work, broadcast channel or group.
	*/
	public $genre;

	/**
	* @var CableOrSatelliteService The CableOrSatelliteService offering the channel.
	*/
	public $inBroadcastLineup;

	/**
	* @var BroadcastService The BroadcastService offered on this channel. Inverse property: hasBroadcastChannel.
	*/
	public $providesBroadcastService;

}
