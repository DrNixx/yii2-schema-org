<?php
namespace onix\schemaorg\models;

/**
 * Model for TrackAction
 *
 * @see http://schema.org/TrackAction
 */
class TrackAction extends FindAction
{
	/**
	* @var DeliveryMethod A sub property of instrument. The method of delivery.
	*/
	public $deliveryMethod;

}
