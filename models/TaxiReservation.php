<?php
namespace onix\schemaorg\models;

/**
 * Model for TaxiReservation
 *
 * @see http://schema.org/TaxiReservation
 */
class TaxiReservation extends Reservation
{
	/**
	* @var integer|QuantitativeValue Number of people the reservation should accommodate.
	*/
	public $partySize;

	/**
	* @var Place Where a taxi will pick up a passenger or a rental car can be picked up.
	*/
	public $pickupLocation;

	/**
	* @var string When a taxi will pickup a passenger or a rental car can be picked up.
	*/
	public $pickupTime;

}
