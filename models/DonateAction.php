<?php
namespace onix\schemaorg\models;

/**
 * Model for DonateAction
 *
 * @see http://schema.org/DonateAction
 */
class DonateAction extends TradeAction
{
	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}
