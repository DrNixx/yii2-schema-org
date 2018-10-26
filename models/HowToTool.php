<?php
namespace onix\schemaorg\models;

/**
 * Model for HowToTool
 *
 * @see http://schema.org/HowToTool
 */
class HowToTool extends HowToItem
{
	/**
	* @var integer|QuantitativeValue|string The required quantity of the item(s).
	*/
	public $requiredQuantity;

}
