<?php

namespace onix\schemaorg\models;

/**
 * Model for SellAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/SellAction
 */
class SellAction extends TradeAction {
	/**
	* @var Person A sub property of participant. The participant/person/organization that bought the object.
	*/
	public $buyer;

}