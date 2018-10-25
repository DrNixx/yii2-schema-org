<?php

namespace onix\schemaorg\models;

/**
 * Model for BedDetails
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/BedDetails
 */
class BedDetails extends Intangible {
	/**
	* @var integer The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
	*/
	public $numberOfBeds;

	/**
	* @var BedType|string The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
	*/
	public $typeOfBed;

}