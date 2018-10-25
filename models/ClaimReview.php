<?php

namespace onix\schemaorg\models;

/**
 * Model for ClaimReview
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/ClaimReview
 */
class ClaimReview extends Review {
	/**
	* @var string A short summary of the specific claims reviewed in a ClaimReview.
	*/
	public $claimReviewed;

}