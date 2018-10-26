<?php
namespace onix\schemaorg\models;

/**
 * Model for School
 *
 * @see http://schema.org/School
 */
class School extends EducationalOrganization
{
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}
