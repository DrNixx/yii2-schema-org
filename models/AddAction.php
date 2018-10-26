<?php
namespace onix\schemaorg\models;

/**
 * Model for AddAction
 *
 * @see http://schema.org/AddAction
 */
class AddAction extends UpdateAction
{
	/**
	* @var Thing A sub property of object. The collection target of the action. Supersedes collection.
	*/
	public $targetCollection;

}
