<?php

namespace onix\schemaorg\models;

/**
 * Model for PaymentChargeSpecification
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification {
	/**
	* @var DeliveryMethod The delivery method(s) to which the delivery charge or payment charge specification applies.
	*/
	public $appliesToDeliveryMethod;

	/**
	* @var PaymentMethod The payment method(s) to which the payment charge specification applies.
	*/
	public $appliesToPaymentMethod;

}