<?php
namespace onix\schemaorg\models;

/**
 * Model for Audience
 *
 * @see http://schema.org/Audience
 */
class Audience extends Intangible
{
	/**
	* @var string The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
	*/
	public $audienceType;

	/**
	* @var AdministrativeArea The geographic area associated with the audience.
	*/
	public $geographicArea;

}
