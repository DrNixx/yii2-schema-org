<?php
namespace onix\schemaorg\models;

/**
 * Model for OwnershipInfo
 *
 * @see http://schema.org/OwnershipInfo
 */
class OwnershipInfo extends StructuredValue
{
	/**
	* @var Organization|Person The organization or person from which the product was acquired.
	*/
	public $acquiredFrom;

	/**
	* @var string The date and time of obtaining the product.
	*/
	public $ownedFrom;

	/**
	* @var string The date and time of giving up ownership on the product.
	*/
	public $ownedThrough;

	/**
	* @var Product|Service The product that this structured value is referring to.
	*/
	public $typeOfGood;

}
