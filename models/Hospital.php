<?php

namespace onix\schemaorg\models;

/**
 * Model for Hospital
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/Hospital
 */
class Hospital extends EmergencyService {
	/**
	* @var MedicalProcedure|MedicalTest|MedicalTherapy A medical service available from this provider.
	*/
	public $availableService;

	/**
	* @var MedicalSpecialty A medical specialty of the provider.
	*/
	public $medicalSpecialty;

}