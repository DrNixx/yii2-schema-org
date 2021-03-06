<?php
namespace onix\schemaorg\models;

/**
 * Model for BorrowAction
 *
 * @see http://schema.org/BorrowAction
 */
class BorrowAction extends TransferAction
{
	/**
	* @var Organization|Person A sub property of participant. The person that lends the object being borrowed.
	*/
	public $lender;

}
