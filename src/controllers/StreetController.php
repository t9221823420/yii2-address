<?php

namespace yozh\address\controllers;

use yozh\address\models\Street;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class StreetController extends Controller
{
	
	public static function defaultModelClass()
	{
		return Street::class;
	}
	
}
