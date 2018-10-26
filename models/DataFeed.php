<?php
namespace onix\schemaorg\models;

/**
 * Model for DataFeed
 *
 * @see http://schema.org/DataFeed
 */
class DataFeed extends Dataset
{
	/**
	* @var DataFeedItem|string|Thing An item within in a data feed. Data feeds may have many elements.
	*/
	public $dataFeedElement;

}
