<?php
namespace onix\schemaorg\models;

/**
 * Model for IndividualProduct
 *
 * @see http://schema.org/IndividualProduct
 */
class IndividualProduct extends Product
{
	/**
	* @var string The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	*/
	public $serialNumber;

}
