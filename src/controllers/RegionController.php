<?php

namespace yozh\address\controllers;

use yozh\address\models\Region;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class RegionController extends Controller
{
	
	public static function defaultModelClass()
	{
		return Region::class;
	}
	
}
