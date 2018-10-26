<?php
namespace onix\schemaorg\models;

/**
 * Model for BlogPosting
 *
 * @see http://schema.org/BlogPosting
 */
class BlogPosting extends SocialMediaPosting
{
	/**
	* @var CreativeWork A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	*/
	public $sharedContent;

}
