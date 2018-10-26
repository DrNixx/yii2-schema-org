<?php
namespace onix\schemaorg\models;

/**
 * Model for ScheduleAction
 *
 * @see http://schema.org/ScheduleAction
 */
class ScheduleAction extends PlanAction
{
	/**
	* @var string The time the object is scheduled to.
	*/
	public $scheduledTime;

}
