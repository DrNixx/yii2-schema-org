<?php

namespace onix\schemaorg\models;

/**
 * Model for MapCategoryType
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/MapCategoryType
 */
class MapCategoryType extends Enumeration {
	/**
	* @var Class|Enumeration|Property Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
	*/
	public $supersededBy;

}