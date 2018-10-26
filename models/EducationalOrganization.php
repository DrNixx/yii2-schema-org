<?php
namespace onix\schemaorg\models;

/**
 * Model for EducationalOrganization
 *
 * @see http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization
{
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}
