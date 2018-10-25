<?php

namespace onix\schemaorg\models;

/**
 * Model for CollegeOrUniversity
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/CollegeOrUniversity
 */
class CollegeOrUniversity extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}