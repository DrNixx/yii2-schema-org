<?php
namespace onix\schemaorg\models;

/**
 * Model for Airport
 *
 * @see http://schema.org/Airport
 */
class Airport extends CivicStructure
{
	/**
	* @var string IATA identifier for an airline or airport.
	*/
	public $iataCode;

	/**
	* @var string ICAO identifier for an airport.
	*/
	public $icaoCode;

}
