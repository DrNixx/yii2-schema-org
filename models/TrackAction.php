<?php

namespace onix\schemaorg\models;

/**
 * Model for TrackAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/TrackAction
 */
class TrackAction extends FindAction {
	/**
	* @var DeliveryMethod A sub property of instrument. The method of delivery.
	*/
	public $deliveryMethod;

}