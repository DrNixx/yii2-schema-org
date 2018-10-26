<?php
namespace onix\schemaorg\models;

/**
 * Model for EmailMessage
 *
 * @see http://schema.org/EmailMessage
 */
class EmailMessage extends Message
{
	/**
	* @var ContactPoint|Organization|Person A sub property of recipient. The recipient blind copied on a message.
	*/
	public $bccRecipient;

	/**
	* @var ContactPoint|Organization|Person A sub property of recipient. The recipient copied on a message.
	*/
	public $ccRecipient;

	/**
	* @var string The date/time at which the message has been read by the recipient if a single recipient exists.
	*/
	public $dateRead;

	/**
	* @var string The date/time the message was received if a single recipient exists.
	*/
	public $dateReceived;

	/**
	* @var string The date/time at which the message was sent.
	*/
	public $dateSent;

	/**
	* @var CreativeWork A CreativeWork attached to the message.
	*/
	public $messageAttachment;

	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

	/**
	* @var Audience|Organization|Person A sub property of participant. The participant who is at the sending end of the action.
	*/
	public $sender;

	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of recipient. The recipient who was directly sent the message.
	*/
	public $toRecipient;

}
