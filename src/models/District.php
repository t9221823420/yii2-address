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

class District extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_address_district}}';
	}
	
	public function rules()
	{
		return [
			[ [ 'name', ], 'required', 'except' => static::SCENARIO_FILTER ],
			
			// string
			[ [ 'name', ], 'string', 'max' => 255 ],
			[ [ 'name', ], 'filter', 'filter' => 'trim' ],
			[ [ 'name', ], 'filter', 'filter' => '\yii\helpers\HtmlPurifier::process' ],
			
			// integer
			[ [ 'city_id', ], 'integer' ],
			[ [ 'city_id', ], 'compare', 'operator' => '>', 'compareValue' => 0 ],
			
			[ [ 'city_id' ],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => City::class,
				'targetAttribute' => [ 'city_id' => 'id' ],
			],
		
		];
	}
	
}