<?php
namespace onix\schemaorg\models;

/**
 * Model for Question
 *
 * @see http://schema.org/Question
 */
class Question extends CreativeWork
{
	/**
	* @var Answer|ItemList The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
	*/
	public $acceptedAnswer;

	/**
	* @var integer The number of answers this question has received.
	*/
	public $answerCount;

	/**
	* @var integer The number of downvotes this question, answer or comment has received from the community.
	*/
	public $downvoteCount;

	/**
	* @var Answer|ItemList An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
	*/
	public $suggestedAnswer;

	/**
	* @var integer The number of upvotes this question, answer or comment has received from the community.
	*/
	public $upvoteCount;

}
