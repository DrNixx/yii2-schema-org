<?php
namespace onix\schemaorg\models;

/**
 * Model for Corporation
 *
 * @see http://schema.org/Corporation
 */
class Corporation extends Organization
{
	/**
	* @var string The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier Codes (MIC) specified in ISO15022.
	*/
	public $tickerSymbol;

}
