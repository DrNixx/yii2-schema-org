<?php

namespace onix\schemaorg\models;

/**
 * Model for ReadAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ReadAction
 */
class ReadAction extends ConsumeAction {
	/**
	* @var Offer An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	*/
	public $expectsAcceptanceOf;

}