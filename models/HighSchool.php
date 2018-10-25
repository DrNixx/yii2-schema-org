<?php

namespace onix\schemaorg\models;

/**
 * Model for HighSchool
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/HighSchool
 */
class HighSchool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}