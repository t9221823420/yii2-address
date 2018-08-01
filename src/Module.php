<?php

namespace yozh\address-simple;

use yozh\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'address-simple';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
