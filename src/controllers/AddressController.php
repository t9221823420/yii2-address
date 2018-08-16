<?php

namespace yozh\address\controllers;

use yozh\address\models\Address;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class AddressController extends Controller
{
	
	public static function defaultModelClass()
	{
		return Address::class;
	}
	
}
