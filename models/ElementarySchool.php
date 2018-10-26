<?php
namespace onix\schemaorg\models;

/**
 * Model for ElementarySchool
 *
 * @see http://schema.org/ElementarySchool
 */
class ElementarySchool extends EducationalOrganization
{
	/**
	* @var Person Alumni of an organization. Inverse property: alumniOf.
	*/
	public $alumni;

}
