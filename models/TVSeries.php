<?php
namespace onix\schemaorg\models;

/**
 * Model for TVSeries
 *
 * @see http://schema.org/TVSeries
 */
class TVSeries extends CreativeWorkSeries
{
	/**
	* @var Person An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.
	*/
	public $actor;

	/**
	* @var CreativeWorkSeason A season that is part of the media series. Supersedes season.
	*/
	public $containsSeason;

	/**
	* @var Country The country of the principal offices of the production company or individual responsible for the movie or program.
	*/
	public $countryOfOrigin;

	/**
	* @var Person A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.
	*/
	public $director;

	/**
	* @var Episode An episode of a tv, radio or game media within a series or season. Supersedes episodes.
	*/
	public $episode;

	/**
	* @var MusicGroup|Person The composer of the soundtrack.
	*/
	public $musicBy;

	/**
	* @var integer The number of episodes in this season or series.
	*/
	public $numberOfEpisodes;

	/**
	* @var integer The number of seasons in this series.
	*/
	public $numberOfSeasons;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var VideoObject The trailer of a movie or tv/radio series, season, episode, etc.
	*/
	public $trailer;

}
