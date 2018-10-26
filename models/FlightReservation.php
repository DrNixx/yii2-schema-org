<?php
namespace onix\schemaorg\models;

/**
 * Model for FlightReservation
 *
 * @see http://schema.org/FlightReservation
 */
class FlightReservation extends Reservation
{
	/**
	* @var string The airline-specific indicator of boarding order / preference.
	*/
	public $boardingGroup;

	/**
	* @var QualitativeValue|string The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
	*/
	public $passengerPriorityStatus;

	/**
	* @var string The passenger's sequence number as assigned by the airline.
	*/
	public $passengerSequenceNumber;

	/**
	* @var string The type of security screening the passenger is subject to.
	*/
	public $securityScreening;

}
