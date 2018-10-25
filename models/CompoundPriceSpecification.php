<?php

namespace onix\schemaorg\models;

/**
 * Model for CompoundPriceSpecification
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/CompoundPriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification {
	/**
	* @var UnitPriceSpecification This property links to all UnitPriceSpecification nodes that apply in parallel for the CompoundPriceSpecification node.
	*/
	public $priceComponent;

}