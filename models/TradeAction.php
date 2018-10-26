<?php
namespace onix\schemaorg\models;

/**
 * Model for TradeAction
 *
 * @see http://schema.org/TradeAction
 */
class TradeAction extends Action
{
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
	* @var PriceSpecification One or more detailed price specifications, indicating the unit price and delivery or payment charges.
	*/
	public $priceSpecification;

}
