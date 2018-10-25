<?php

namespace onix\schemaorg\models;

/**
 * Model for PrependAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/PrependAction
 */
class PrependAction extends InsertAction {
	/**
	* @var Place A sub property of location. The final location of the object or the agent after the action.
	*/
	public $toLocation;

}