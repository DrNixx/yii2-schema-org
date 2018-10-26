<?php
namespace onix\schemaorg\models;

/**
 * Model for WebApplication
 *
 * @see http://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication
{
	/**
	* @var string Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
	*/
	public $browserRequirements;

}
