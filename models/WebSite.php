<?php

namespace onix\schemaorg\models;

/**
 * Model for WebSite
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/WebSite
 */
class WebSite extends CreativeWork {
	/**
	* @var string The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	*/
	public $issn;

}