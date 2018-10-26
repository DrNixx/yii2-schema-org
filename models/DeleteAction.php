<?php
namespace onix\schemaorg\models;

/**
 * Model for DeleteAction
 *
 * @see http://schema.org/DeleteAction
 */
class DeleteAction extends UpdateAction
{
	/**
	* @var Thing A sub property of object. The collection target of the action. Supersedes collection.
	*/
	public $targetCollection;

}
