<?php
namespace onix\schemaorg\models;

/**
 * Model for APIReference
 *
 * @see http://schema.org/APIReference
 */
class APIReference extends TechArticle
{
	/**
	* @var string Associated product/technology version. e.g., .NET Framework 4.5.
	*/
	public $assemblyVersion;

	/**
	* @var string Library file name e.g., mscorlib.dll, system.web.dll. Supersedes assembly.
	*/
	public $executableLibraryName;

	/**
	* @var string Indicates whether API is managed or unmanaged.
	*/
	public $programmingModel;

	/**
	* @var string Type of app development: phone, Metro style, desktop, XBox, etc.
	*/
	public $targetPlatform;

}
