<?php

namespace yozh\address\controllers;

use yozh\address\models\Country;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class CountryController extends Controller
{
	
	public static function defaultModelClass()
	{
		return Country::class;
	}
	
}
