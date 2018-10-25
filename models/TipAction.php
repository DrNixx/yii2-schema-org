<?php

namespace onix\schemaorg\models;

/**
 * Model for TipAction
 *
 * @package onix\schemaorg\models
 * @see http://schema.org/TipAction
 */
class TipAction extends TradeAction {
	/**
	* @var Audience|ContactPoint|Organization|Person A sub property of participant. The participant who is at the receiving end of the action.
	*/
	public $recipient;

}