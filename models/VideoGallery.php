<?php
namespace onix\schemaorg\models;

/**
 * Model for VideoGallery
 *
 * @see http://schema.org/VideoGallery
 */
class VideoGallery extends CollectionPage
{
	/**
	* @var BreadcrumbList|string A set of links that can help a user understand and navigate a website hierarchy.
	*/
	public $breadcrumb;

	/**
	* @var string Date on which the content on this web page was last reviewed for accuracy and/or completeness.
	*/
	public $lastReviewed;

	/**
	* @var WebPageElement Indicates if this web page element is the main subject of the page. Supersedes aspect.
	*/
	public $mainContentOfPage;

	/**
	* @var ImageObject Indicates the main image on the page.
	*/
	public $primaryImageOfPage;

	/**
	* @var string A link related to this web page, for example to other related web pages.
	*/
	public $relatedLink;

	/**
	* @var Organization|Person People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
	*/
	public $reviewedBy;

	/**
	* @var string One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most. Supersedes significantLinks.
	*/
	public $significantLink;

	/**
	* @var SpeakableSpecification|string Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.
	* 
	* The speakable property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:
	* 
	* 1.) id-value URL references - uses id-value of an element in the page being annotated. The simplest use of speakable has (potentially relative) URL values, referencing identified sections of the document concerned.
	* 
	* 2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the cssSelector property.
	* 
	* 3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the xpath property.
	* 
	* For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
	* we define a supporting type, SpeakableSpecification  which is defined to be a possible value of the speakable property.
	*/
	public $speakable;

	/**
	* @var Specialty One of the domain specialities to which this web page's content applies.
	*/
	public $specialty;

}
