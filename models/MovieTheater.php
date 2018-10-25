<?php

namespace onix\schemaorg\models;

/**
 * Model for MovieTheater
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/MovieTheater
 */
class MovieTheater extends EntertainmentBusiness {
	/**
	* @var integer The number of screens in the movie theater.
	*/
	public $screenCount;

}