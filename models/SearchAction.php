<?php
namespace onix\schemaorg\models;

/**
 * Model for SearchAction
 *
 * @see http://schema.org/SearchAction
 */
class SearchAction extends Action
{
	/**
	* @var string A sub property of instrument. The query used on this action.
	*/
	public $query;

	/**
	* @var string Query input param
	*/
	public $query_input = 'required';

}
