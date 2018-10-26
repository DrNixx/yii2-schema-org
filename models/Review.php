<?php
namespace onix\schemaorg\models;

/**
 * Model for Review
 *
 * @see http://schema.org/Review
 */
class Review extends CreativeWork
{
	/**
	* @var Thing The item that is being reviewed/rated.
	*/
	public $itemReviewed;

	/**
	* @var string This Review or Rating is relevant to this part or facet of the itemReviewed.
	*/
	public $reviewAspect;

	/**
	* @var string The actual body of the review.
	*/
	public $reviewBody;

	/**
	* @var Rating The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
	*/
	public $reviewRating;

}
