<?php
namespace onix\schemaorg\models;

/**
 * Model for Flight
 *
 * @see http://schema.org/Flight
 */
class Flight extends Trip
{
	/**
	* @var string|Vehicle The kind of aircraft (e.g., "Boeing 747").
	*/
	public $aircraft;

	/**
	* @var Airport The airport where the flight terminates.
	*/
	public $arrivalAirport;

	/**
	* @var string Identifier of the flight's arrival gate.
	*/
	public $arrivalGate;

	/**
	* @var string Identifier of the flight's arrival terminal.
	*/
	public $arrivalTerminal;

	/**
	* @var BoardingPolicyType The type of boarding policy used by the airline (e.g. zone-based or group-based).
	*/
	public $boardingPolicy;

	/**
	* @var Airport The airport where the flight originates.
	*/
	public $departureAirport;

	/**
	* @var string Identifier of the flight's departure gate.
	*/
	public $departureGate;

	/**
	* @var string Identifier of the flight's departure terminal.
	*/
	public $departureTerminal;

	/**
	* @var Duration|string The estimated time the flight will take.
	*/
	public $estimatedFlightDuration;

	/**
	* @var Distance|string The distance of the flight.
	*/
	public $flightDistance;

	/**
	* @var string The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is 'UA', the flightNumber is 'UA110'.
	*/
	public $flightNumber;

	/**
	* @var string Description of the meals that will be provided or available for purchase.
	*/
	public $mealService;

	/**
	* @var Organization|Person An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes merchant, vendor.
	*/
	public $seller;

	/**
	* @var string The time when a passenger can check into the flight online.
	*/
	public $webCheckinTime;

}
