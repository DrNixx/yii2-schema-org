<?php
namespace onix\schemaorg\models;

/**
 * Model for ConsumeAction
 *
 * @see http://schema.org/ConsumeAction
 */
class ConsumeAction extends Action
{
	/**
	* @var ActionAccessSpecification A set of requirements that a must be fulfilled in order to perform an Action. If more than one value is specied, fulfilling one set of requirements will allow the Action to be performed.
	*/
	public $actionAccessibilityRequirement;

	/**
	* @var Offer An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	*/
	public $expectsAcceptanceOf;

}
