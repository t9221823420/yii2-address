<?php

namespace yozh\address-simple;

class AssetBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-address-simple.css',
	    //['css/yozh-address-simple.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-address-simple.js'
    ];
	
    public $depends = [
        //'yii\bootstrap\BootstrapAsset',
    ];	
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}