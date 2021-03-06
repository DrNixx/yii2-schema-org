<?php
namespace onix\schemaorg\models;

/**
 * Model for SportsEvent
 *
 * @see http://schema.org/SportsEvent
 */
class SportsEvent extends Event
{
	/**
	* @var Person|SportsTeam The away team in a sports event.
	*/
	public $awayTeam;

	/**
	* @var Person|SportsTeam A competitor in a sports event.
	*/
	public $competitor;

	/**
	* @var Person|SportsTeam The home team in a sports event.
	*/
	public $homeTeam;

}
