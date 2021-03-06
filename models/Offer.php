<?php
namespace onix\schemaorg\models;

/**
 * Model for Offer
 *
 * @see http://schema.org/Offer
 */
class Offer extends Intangible
{
	/**
	* @var LoanOrCredit|PaymentMethod The payment method(s) accepted by seller for this offer.
	*/
	public $acceptedPaymentMethod;

	/**
	* @var Offer An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
	*/
	public $addOn;

	/**
	* @var QuantitativeValue The amount of time that is required between accepting the offer and the actual usage of the resource or service.
	*/
	public $advanceBookingRequirement;

	/**
	* @var AggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
	*/
	public $aggregateRating;

	/**
	* @var AdministrativeArea|GeoShape|Place|string The geographic area where a service or offered item is provided. Supersedes serviceArea.
	*/
	public $areaServed;

	/**
	* @var ItemAvailability The availability of this item—for example In stock, Out of stock, Pre-order, etc.
	*/
	public $availability;

	/**
	* @var string The end of the availability of the product or service included in the offer.
	*/
	public $availabilityEnds;

	/**
	* @var string The beginning of the availability of the product or service included in the offer.
	*/
	public $availabilityStarts;

	/**
	* @var Place The place(s) from which the offer can be obtained (e.g. store locations).
	*/
	public $availableAtOrFrom;

	/**
	* @var DeliveryMethod The delivery method(s) available for this offer.
	*/
	public $availableDeliveryMethod;

	/**
	* @var BusinessFunction The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	*/
	public $businessFunction;

	/**
	* @var PhysicalActivityCategory|string|Thing A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	*/
	public $category;

	/**
	* @var QuantitativeValue The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
	*/
	public $deliveryLeadTime;

	/**
	* @var BusinessEntityType The type(s) of customers for which the given offer is valid.
	*/
	public $eligibleCustomerType;

	/**
	* @var QuantitativeValue The duration for which the given offer is valid.
	*/
	public $eligibleDuration;

	/**
	* @var QuantitativeValue The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	*/
	public $eligibleQuantity;

	/**
	* @var GeoShape|Place|string The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
	* 
	* See also ineligibleRegion.
	*/
	public $eligibleRegion;

	/**
	* @var PriceSpecification The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
	*/
	public $eligibleTransactionVolume;

	/**
	* @var string The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See GS1 GTIN Summary for more details.
	*/
	public $gtin12;

	/**
	* @var string The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1 GTIN Summary for more details.
	*/
	public $gtin13;

	/**
	* @var string The GTIN-14 code of the product, or the product to which the offer refers. See GS1 GTIN Summary for more details.
	*/
	public $gtin14;

	/**
	* @var string The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.
	*/
	public $gtin8;

	/**
	* @var TypeAndQuantityNode This links to a node or nodes indicating the exact quantity of the products included in the offer.
	*/
	public $includesObject;

	/**
	* @var GeoShape|Place|string The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.
	* 
	* See also eligibleRegion.
	*/
	public $ineligibleRegion;

	/**
	* @var QuantitativeValue The current approximate inventory level for the item or items.
	*/
	public $inventoryLevel;

	/**
	* @var OfferItemCondition A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
	*/
	public $itemCondition;

	/**
	* @var Product|Service The item being offered.
	*/
	public $itemOffered;

	/**
	* @var string The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	*/
	public $mpn;

	/**
	* @var Organization|Person A pointer to the organization or person making the offer. Inverse property: makesOffer.
	*/
	public $offeredBy;

	/**
	* @var integer|string The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
	* 
	* Usage guidelines:Use the priceCurrency property (with standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR") instead of including ambiguous symbols such as '$' in the value.
	* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
	* Note that both RDFa and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.
	* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.
	*/
	public $price;

	/**
	* @var string The currency of the price, or a price component when attached to PriceSpecification and its subtypes.
	* 
	* Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR".
	*/
	public $priceCurrency;

	/**
	* @var PriceSpecification One or more detailed price specifications, indicating the unit price and delivery or payment charges.
	*/
	public $priceSpecification;

	/**
	* @var string The date after which the price is no longer available.
	*/
	public $priceValidUntil;

	/**
	* @var Review A review of the item. Supersedes reviews.
	*/
	public $review;

	/**
	* @var Organization|Person An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes merchant, vendor.
	*/
	public $seller;

	/**
	* @var string The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	*/
	public $serialNumber;

	/**
	* @var string The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
	*/
	public $sku;

	/**
	* @var string The date when the item becomes valid.
	*/
	public $validFrom;

	/**
	* @var string The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	*/
	public $validThrough;

	/**
	* @var WarrantyPromise The warranty promise(s) included in the offer. Supersedes warrantyPromise.
	*/
	public $warranty;

}
