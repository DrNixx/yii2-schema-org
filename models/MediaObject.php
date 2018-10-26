<?php
namespace onix\schemaorg\models;

/**
 * Model for MediaObject
 *
 * @see http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{
	/**
	* @var NewsArticle A NewsArticle associated with the Media Object.
	*/
	public $associatedArticle;

	/**
	* @var string The bitrate of the media object.
	*/
	public $bitrate;

	/**
	* @var string File size in (mega/kilo) bytes.
	*/
	public $contentSize;

	/**
	* @var string Actual bytes of the media object, for example the image file or video file.
	*/
	public $contentUrl;

	/**
	* @var Duration The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	*/
	public $duration;

	/**
	* @var string A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.
	*/
	public $embedUrl;

	/**
	* @var CreativeWork The CreativeWork encoded by this media object.
	*/
	public $encodesCreativeWork;

	/**
	* @var string Media type typically expressed using a MIME format (see IANA site and MDN reference) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).
	* 
	* In cases where a CreativeWork has several media type representations, encoding can be used to indicate each MediaObject alongside particular encodingFormat information.
	* 
	* Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry. Supersedes fileFormat.
	*/
	public $encodingFormat;

	/**
	* @var Distance|QuantitativeValue The height of the item.
	*/
	public $height;

	/**
	* @var string Player type required—for example, Flash or Silverlight.
	*/
	public $playerType;

	/**
	* @var Organization The production company or studio responsible for the item e.g. series, video game, episode etc.
	*/
	public $productionCompany;

	/**
	* @var Place The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
	*/
	public $regionsAllowed;

	/**
	* @var boolean|MediaSubscription Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
	*/
	public $requiresSubscription;

	/**
	* @var string Date when this media object was uploaded to this site.
	*/
	public $uploadDate;

	/**
	* @var Distance|QuantitativeValue The width of the item.
	*/
	public $width;

}
