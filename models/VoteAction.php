<?php
namespace onix\schemaorg\models;

/**
 * Model for VoteAction
 *
 * @see http://schema.org/VoteAction
 */
class VoteAction extends ChooseAction
{
	/**
	* @var Person A sub property of object. The candidate subject of this action.
	*/
	public $candidate;

}
