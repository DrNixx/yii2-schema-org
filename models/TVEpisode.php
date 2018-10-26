<?php
namespace onix\schemaorg\models;

/**
 * Model for TVEpisode
 *
 * @see http://schema.org/TVEpisode
 */
class TVEpisode extends Episode
{
	/**
	* @var Country The country of the principal offices of the production company or individual responsible for the movie or program.
	*/
	public $countryOfOrigin;

	/**
	* @var Language|string Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
	*/
	public $subtitleLanguage;

}
