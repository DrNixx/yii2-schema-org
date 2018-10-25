<?php

namespace onix\schemaorg\models;

/**
 * Model for Airline
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/Airline
 */
class Airline extends Organization {
	/**
	* @var BoardingPolicyType The type of boarding policy used by the airline (e.g. zone-based or group-based).
	*/
	public $boardingPolicy;

	/**
	* @var string IATA identifier for an airline or airport.
	*/
	public $iataCode;

}