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

class Region extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_address_region}}';
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
			[ [ 'country_id', ], 'integer' ],
			[ [ 'country_id', ], 'compare', 'operator' => '>', 'compareValue' => 0 ],
			
			[ [ 'country_id' ],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Country::class,
				'targetAttribute' => [ 'country_id' => 'id' ],
			],
		
		];
	}
	
	public function getCountry()
	{
		return $this->hasOne( Country::class, [ 'id' => 'country_id' ] );
	}
	
	
}