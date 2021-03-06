<?php
namespace onix\schemaorg\models;

/**
 * Model for MedicalOrganization
 *
 * @see http://schema.org/MedicalOrganization
 */
class MedicalOrganization extends Organization
{
	/**
	* @var string Name or unique ID of network. (Networks are often reused across different insurance plans).
	*/
	public $healthPlanNetworkId;

	/**
	* @var boolean Whether the provider is accepting new patients.
	*/
	public $isAcceptingNewPatients;

	/**
	* @var MedicalSpecialty A medical specialty of the provider.
	*/
	public $medicalSpecialty;

}
