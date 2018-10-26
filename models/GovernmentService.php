<?php
namespace onix\schemaorg\models;

/**
 * Model for GovernmentService
 *
 * @see http://schema.org/GovernmentService
 */
class GovernmentService extends Service
{
	/**
	* @var Organization The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
	*/
	public $serviceOperator;

}
