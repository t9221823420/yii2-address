<?php

namespace yozh\address;

class AssetBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-address.css',
	    //['css/yozh-address.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-address.js'
    ];
	
    public $depends = [
        //'yii\bootstrap\BootstrapAsset',
    ];	
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}