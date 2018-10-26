<?php
namespace onix\schemaorg\models;

/**
 * Model for BusTrip
 *
 * @see http://schema.org/BusTrip
 */
class BusTrip extends Trip
{
	/**
	* @var BusStation|BusStop The stop or station from which the bus arrives.
	*/
	public $arrivalBusStop;

	/**
	* @var string The name of the bus (e.g. Bolt Express).
	*/
	public $busName;

	/**
	* @var string The unique identifier for the bus.
	*/
	public $busNumber;

	/**
	* @var BusStation|BusStop The stop or station from which the bus departs.
	*/
	public $departureBusStop;

}
