<?php
namespace onix\schemaorg\models;

/**
 * Model for WPSideBar
 *
 * @see http://schema.org/WPSideBar
 */
class WPSideBar extends WebPageElement
{
	/**
	* @var CssSelectorType A CSS selector, e.g. of a SpeakableSpecification or WebPageElement. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
	*/
	public $cssSelector;

	/**
	* @var XPathType An XPath, e.g. of a SpeakableSpecification or WebPageElement. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
	*/
	public $xpath;

}
