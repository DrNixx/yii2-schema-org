<?php
namespace onix\schemaorg\models;

/**
 * Model for Answer
 *
 * @see http://schema.org/Answer
 */
class Answer extends Comment
{
	/**
	* @var integer The number of downvotes this question, answer or comment has received from the community.
	*/
	public $downvoteCount;

	/**
	* @var Question The parent of a question, answer or item in general.
	*/
	public $parentItem;

	/**
	* @var integer The number of upvotes this question, answer or comment has received from the community.
	*/
	public $upvoteCount;

}
