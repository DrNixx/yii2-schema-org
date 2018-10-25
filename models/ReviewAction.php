<?php

namespace onix\schemaorg\models;

/**
 * Model for ReviewAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ReviewAction
 */
class ReviewAction extends AssessAction {
	/**
	* @var Review A sub property of result. The review that resulted in the performing of the action.
	*/
	public $resultReview;

}