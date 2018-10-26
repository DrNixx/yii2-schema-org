<?php
namespace onix\schemaorg\models;

/**
 * Model for ChooseAction
 *
 * @see http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction
{
	/**
	* @var string|Thing A sub property of object. The options subject to this action. Supersedes option.
	*/
	public $actionOption;

}
