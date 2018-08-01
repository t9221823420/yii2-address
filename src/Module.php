<?php

namespace yozh\address;

use yozh\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'address';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
