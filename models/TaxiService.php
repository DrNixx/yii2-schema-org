<?php
namespace onix\schemaorg\models;

/**
 * Model for TaxiService
 *
 * @see http://schema.org/TaxiService
 */
class TaxiService extends Service
{
	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var AdministrativeArea|GeoShape|Place|string The geographic area where a service or offered item is provided. Supersedes serviceArea.
	*/
	public $areaServed;

	/**
	* @var Audience An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	*/
	public $audience;

	/**
	* @var ServiceChannel A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
	*/
	public $availableChannel;

	/**
	* @var string An award won by or for this item. Supersedes awards.
	*/
	public $award;

	/**
	* @var Brand|Organization The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	*/
	public $brand;

	/**
	* @var Organization|Person An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	*/
	public $broker;

	/**
	* @var PhysicalActivityCategory|string|Thing A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	*/
	public $category;

	/**
	* @var OfferCatalog Indicates an OfferCatalog listing for this Organization, Person, or Service.
	*/
	public $hasOfferCatalog;

	/**
	* @var OpeningHoursSpecification The hours during which this service or contact is available.
	*/
	public $hoursAvailable;

	/**
	* @var Product|Service A pointer to another, somehow related product (or multiple products).
	*/
	public $isRelatedTo;

	/**
	* @var Product|Service A pointer to another, functionally similar product (or multiple products).
	*/
	public $isSimilarTo;

	/**
	* @var ImageObject|string An associated logo.
	*/
	public $logo;

	/**
	* @var Offer An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
	*/
	public $offers;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var string Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
	*/
	public $providerMobility;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var Thing The tangible thing generated by the service, e.g. a passport, permit, etc. Supersedes produces.
	*/
	public $serviceOutput;

	/**
	* @var string The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
	*/
	public $serviceType;

	/**
	* @var string Human-readable terms of service documentation.
	*/
	public $termsOfService;

}
