<?php

namespace onix\schemaorg\models;

/**
 * Model for House
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/House
 */
class House extends Accommodation {
	/**
	* @var integer|QuantitativeValue The number of rooms (excluding bathrooms and closets) of the acccommodation or lodging business.
	* Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
	*/
	public $numberOfRooms;

}