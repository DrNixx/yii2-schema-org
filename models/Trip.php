<?php
namespace onix\schemaorg\models;

/**
 * Model for Trip
 *
 * @see http://schema.org/Trip
 */
class Trip extends Intangible
{
	/**
	* @var string The expected arrival time.
	*/
	public $arrivalTime;

	/**
	* @var string The expected departure time.
	*/
	public $departureTime;

	/**
	* @var CreativeWork|Trip Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense). Inverse property: isPartOf.
	*/
	public $hasPart;

	/**
	* @var CreativeWork|Trip Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of. Inverse property: hasPart.
	*/
	public $isPartOf;

	/**
	* @var ItemList|Place Destination(s) ( Place ) that make up a trip. For a trip where destination order is important use ItemList to specify that order (see examples).
	*/
	public $itinerary;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

}
