<?php
namespace onix\schemaorg\models;

/**
 * Model for Ticket
 *
 * @see http://schema.org/Ticket
 */
class Ticket extends Intangible
{
	/**
	* @var string The date the ticket was issued.
	*/
	public $dateIssued;

	/**
	* @var Organization The organization issuing the ticket or permit.
	*/
	public $issuedBy;

	/**
	* @var string The currency of the price, or a price component when attached to PriceSpecification and its subtypes.
	* 
	* Use standard formats: ISO 4217 currency format e.g. "USD"; Ticker symbol for cryptocurrencies e.g. "BTC"; well known names for Local Exchange Tradings Systems (LETS) and other currency types e.g. "Ithaca HOUR".
	*/
	public $priceCurrency;

	/**
	* @var string The unique identifier for the ticket.
	*/
	public $ticketNumber;

	/**
	* @var string Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
	*/
	public $ticketToken;

	/**
	* @var Seat The seat associated with the ticket.
	*/
	public $ticketedSeat;

	/**
	* @var integer|PriceSpecification|string The total price for the reservation or ticket, including applicable taxes, shipping, etc.
	*/
	public $totalPrice;

	/**
	* @var Organization|Person The person or organization the reservation or ticket is for.
	*/
	public $underName;

}
