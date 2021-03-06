<?php
namespace onix\schemaorg\models;

/**
 * Model for Recipe
 *
 * @see http://schema.org/Recipe
 */
class Recipe extends HowTo
{
	/**
	* @var Duration The time it takes to actually cook the dish, in ISO 8601 duration format.
	*/
	public $cookTime;

	/**
	* @var string The method of cooking, such as Frying, Steaming, ...
	*/
	public $cookingMethod;

	/**
	* @var NutritionInformation Nutrition information about the recipe or menu item.
	*/
	public $nutrition;

	/**
	* @var string The category of the recipe—for example, appetizer, entree, etc.
	*/
	public $recipeCategory;

	/**
	* @var string The cuisine of the recipe (for example, French or Ethiopian).
	*/
	public $recipeCuisine;

	/**
	* @var string A single ingredient used in the recipe, e.g. sugar, flour or garlic. Supersedes ingredients.
	*/
	public $recipeIngredient;

	/**
	* @var CreativeWork|ItemList|string A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
	*/
	public $recipeInstructions;

	/**
	* @var QuantitativeValue|string The quantity produced by the recipe (for example, number of people served, number of servings, etc).
	*/
	public $recipeYield;

	/**
	* @var RestrictedDiet Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
	*/
	public $suitableForDiet;

}
