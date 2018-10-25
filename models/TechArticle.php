<?php

namespace onix\schemaorg\models;

/**
 * Model for TechArticle
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/TechArticle
 */
class TechArticle extends Article {
	/**
	* @var string Prerequisites needed to fulfill steps in article.
	*/
	public $dependencies;

	/**
	* @var string Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
	*/
	public $proficiencyLevel;

}