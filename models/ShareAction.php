<?php
namespace onix\schemaorg\models;

/**
 * Model for ShareAction
 *
 * @see http://schema.org/ShareAction
 */
class ShareAction extends CommunicateAction
{
	/**
	* @var Thing The subject matter of the content. Inverse property: subjectOf.
	*/
	public $about;

	/**
	* @var Language|string The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.
	*/
	public $inLanguage;

	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}
