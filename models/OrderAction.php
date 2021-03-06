<?php
namespace onix\schemaorg\models;

/**
 * Model for OrderAction
 *
 * @see http://schema.org/OrderAction
 */
class OrderAction extends TradeAction
{
	/**
	* @var DeliveryMethod A sub property of instrument. The method of delivery.
	*/
	public $deliveryMethod;

}
