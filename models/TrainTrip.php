<?php
namespace onix\schemaorg\models;

/**
 * Model for TrainTrip
 *
 * @see http://schema.org/TrainTrip
 */
class TrainTrip extends Trip
{
	/**
	* @var string The platform where the train arrives.
	*/
	public $arrivalPlatform;

	/**
	* @var TrainStation The station where the train trip ends.
	*/
	public $arrivalStation;

	/**
	* @var string The platform from which the train departs.
	*/
	public $departurePlatform;

	/**
	* @var TrainStation The station from which the train departs.
	*/
	public $departureStation;

	/**
	* @var string The name of the train (e.g. The Orient Express).
	*/
	public $trainName;

	/**
	* @var string The unique identifier for the train.
	*/
	public $trainNumber;

}
