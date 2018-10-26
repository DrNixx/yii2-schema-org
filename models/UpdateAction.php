<?php
namespace onix\schemaorg\models;

/**
 * Model for UpdateAction
 *
 * @see http://schema.org/UpdateAction
 */
class UpdateAction extends Action
{
	/**
	* @var Thing A sub property of object. The collection target of the action. Supersedes collection.
	*/
	public $targetCollection;

}
