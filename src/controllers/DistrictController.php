<?php

namespace yozh\address\controllers;

use yozh\address\models\District;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class DistrictController extends Controller
{
	
	public static function defaultModelClass()
	{
		return District::class;
	}
	
}
