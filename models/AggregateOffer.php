<?php
namespace onix\schemaorg\models;

/**
 * Model for AggregateOffer
 *
 * @see http://schema.org/AggregateOffer
 */
class AggregateOffer extends Offer
{
	/**
	* @var integer|string The highest price of all offers available.
	*/
	public $highPrice;

	/**
	* @var integer|string The lowest price of all offers available.
	*/
	public $lowPrice;

	/**
	* @var integer The number of offers for the product.
	*/
	public $offerCount;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

}
