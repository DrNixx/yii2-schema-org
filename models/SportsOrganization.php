<?php

namespace onix\schemaorg\models;

/**
 * Model for SportsOrganization
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/SportsOrganization
 */
class SportsOrganization extends Organization {
	/**
	* @var string A type of sport (e.g. Baseball).
	*/
	public $sport;

}