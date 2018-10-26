<?php
namespace onix\schemaorg\models;

/**
 * Model for WriteAction
 *
 * @see http://schema.org/WriteAction
 */
class WriteAction extends CreateAction
{
	/**
	* @var Language|string The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.
	*/
	public $inLanguage;

}
