<?php
namespace onix\schemaorg\models;

/**
 * Model for Map
 *
 * @see http://schema.org/Map
 */
class Map extends CreativeWork
{
	/**
	* @var MapCategoryType Indicates the kind of Map, from the MapCategoryType Enumeration.
	*/
	public $mapType;

}
