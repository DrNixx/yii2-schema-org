<?php
namespace onix\schemaorg\models;

/**
 * Model for MiddleSchool
 *
 * @see http://schema.org/MiddleSchool
 */
class MiddleSchool extends EducationalOrganization
{
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}
