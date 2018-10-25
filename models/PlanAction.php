<?php

namespace onix\schemaorg\models;

/**
 * Model for PlanAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/PlanAction
 */
class PlanAction extends OrganizeAction {
	/**
	* @var string The time the object is scheduled to.
	*/
	public $scheduledTime;

}