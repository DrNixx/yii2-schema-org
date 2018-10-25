<?php

namespace onix\schemaorg\models;

/**
 * Model for SomeProducts
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/SomeProducts
 */
class SomeProducts extends Product {
	/**
	* @var QuantitativeValue The current approximate inventory level for the item or items.
	*/
	public $inventoryLevel;

}