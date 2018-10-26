<?php
namespace onix\schemaorg\models;

/**
 * Model for MobileApplication
 *
 * @see http://schema.org/MobileApplication
 */
class MobileApplication extends SoftwareApplication
{
	/**
	* @var string Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
	*/
	public $carrierRequirements;

}
