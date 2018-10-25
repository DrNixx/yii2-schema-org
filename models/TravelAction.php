<?php

namespace onix\schemaorg\models;

/**
 * Model for TravelAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/TravelAction
 */
class TravelAction extends MoveAction {
	/**
	* @var Distance The distance travelled, e.g. exercising or travelling.
	*/
	public $distance;

}