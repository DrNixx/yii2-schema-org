<?php
namespace onix\schemaorg\models;

/**
 * Model for Menu
 *
 * @see http://schema.org/Menu
 */
class Menu extends CreativeWork
{
	/**
	* @var MenuItem A food or drink item contained in a menu or menu section.
	*/
	public $hasMenuItem;

	/**
	* @var MenuSection A subgrouping of the menu (by dishes, course, serving time period, etc.).
	*/
	public $hasMenuSection;

}
