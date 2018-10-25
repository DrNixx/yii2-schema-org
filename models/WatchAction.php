<?php

namespace onix\schemaorg\models;

/**
 * Model for WatchAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/WatchAction
 */
class WatchAction extends ConsumeAction {
	/**
	* @var Offer An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	*/
	public $expectsAcceptanceOf;

}