<?php

namespace yozh\address\controllers;

use yozh\address\models\City;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class CityController extends Controller
{
	
	public static function defaultModelClass()
	{
		return City::class;
	}
	
}
