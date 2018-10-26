<?php
namespace onix\schemaorg\models;

/**
 * Model for SocialMediaPosting
 *
 * @see http://schema.org/SocialMediaPosting
 */
class SocialMediaPosting extends Article
{
	/**
	* @var CreativeWork A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	*/
	public $sharedContent;

}
