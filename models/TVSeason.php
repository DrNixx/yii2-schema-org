<?php
namespace onix\schemaorg\models;

/**
 * Model for TVSeason
 *
 * @see http://schema.org/TVSeason
 */
class TVSeason extends CreativeWorkSeason
{
	/**
	* @var Country The country of the principal offices of the production company or individual responsible for the movie or program.
	*/
	public $countryOfOrigin;

}
