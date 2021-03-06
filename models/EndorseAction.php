<?php
namespace onix\schemaorg\models;

/**
 * Model for EndorseAction
 *
 * @see http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction
{
	/**
	* @var Organization|Person A sub property of participant. The person/organization being supported.
	*/
	public $endorsee;

}
