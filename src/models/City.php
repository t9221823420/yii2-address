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

class City extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_address_city}}';
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
			[ [ 'region_id', 'country_id', ], 'integer' ],
			[ [ 'region_id', 'country_id', ], 'compare', 'operator' => '>', 'compareValue' => 0 ],
			
			[ [ 'region_id' ],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Region::class,
				'targetAttribute' => [ 'region_id' => 'id' ],
			],
		
			[ [ 'country_id' ],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Country::class,
				'targetAttribute' => [ 'country_id' => 'id' ],
			],
		
		];
	}
	
}