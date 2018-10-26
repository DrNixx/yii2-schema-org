<?php
namespace onix\schemaorg\models;

/**
 * Model for Reservation
 *
 * @see http://schema.org/Reservation
 */
class Reservation extends Intangible
{
	/**
	* @var string The date and time the reservation was booked.
	*/
	public $bookingTime;

	/**
	* @var Organization|Person An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes bookingAgent.
	*/
	public $broker;

	/**
	* @var string The date and time the reservation was modified.
	*/
	public $modifiedTime;

	/**
	* @var string The currency of the price, or a price component when attached to PriceSpecification and its subtypes.
	* 
	* Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR".
	*/
	public $priceCurrency;

	/**
	* @var ProgramMembership Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
	*/
	public $programMembershipUsed;

	/**
	* @var Organization|Person The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.
	*/
	public $provider;

	/**
	* @var Thing The thing -- flight, event, restaurant,etc. being reserved.
	*/
	public $reservationFor;

	/**
	* @var string A unique identifier for the reservation.
	*/
	public $reservationId;

	/**
	* @var ReservationStatusType The current status of the reservation.
	*/
	public $reservationStatus;

	/**
	* @var Ticket A ticket associated with the reservation.
	*/
	public $reservedTicket;

	/**
	* @var integer|PriceSpecification|string The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	*/
	public $totalPrice;

	/**
	* @var Organization|Person The person or organization the reservation or ticket is for.
	*/
	public $underName;

}
