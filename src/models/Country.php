<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 01.08.2018
 * Time: 11:00
 */

namespace yozh\address\models;

use Yii;
use yozh\crud\models\BaseModel as ActiveRecord;

class Country extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_address_country}}';
	}
	
	public function rules()
	{
		return [
			[ [ 'name', ], 'required', 'except' => static::SCENARIO_FILTER ],
			
			[ [ 'name', ], 'string', 'max' => 255 ],
			[ [ 'name', ], 'filter', 'filter' => 'trim' ],
			[ [ 'name', ], 'filter', 'filter' => '\yii\helpers\HtmlPurifier::process' ],
			
		];
	}

}