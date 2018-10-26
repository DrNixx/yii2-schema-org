<?php
namespace onix\schemaorg\models;

/**
 * Model for SpreadsheetDigitalDocument
 *
 * @see http://schema.org/SpreadsheetDigitalDocument
 */
class SpreadsheetDigitalDocument extends DigitalDocument
{
	/**
	* @var DigitalDocumentPermission A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
	*/
	public $hasDigitalDocumentPermission;

}
