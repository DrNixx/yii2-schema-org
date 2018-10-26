<?php
namespace onix\schemaorg\models;

/**
 * Model for CourseInstance
 *
 * @see http://schema.org/CourseInstance
 */
class CourseInstance extends Event
{
	/**
	* @var string The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
	*/
	public $courseMode;

	/**
	* @var Person A person assigned to instruct or provide instructional assistance for the CourseInstance.
	*/
	public $instructor;

}
