<?php

namespace onix\schemaorg\models;

/**
 * Model for ReceiveAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ReceiveAction
 */
class ReceiveAction extends TransferAction {
	/**
	* @var DeliveryMethod A sub property of instrument. The method of delivery.
	*/
	public $deliveryMethod;

	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the sending end of the action.
	*/
	public $sender;

}