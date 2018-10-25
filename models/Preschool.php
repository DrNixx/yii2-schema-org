<?php

namespace onix\schemaorg\models;

/**
 * Model for Preschool
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/Preschool
 */
class Preschool extends EducationalOrganization {
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}