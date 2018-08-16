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

class Address extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%yozh_address_address}}';
	}
	
	public function rules()
	{
		return [
			[ [ 'number', ], 'required', 'except' => static::SCENARIO_FILTER ],
			
			// string
			[ [ 'letter', 'zip', 'additional_info', ], 'string', 'max' => 255 ],
			[ [ 'letter', 'zip', 'additional_info', ], 'filter', 'filter' => 'trim' ],
			[ [ 'letter', 'zip', 'additional_info', ], 'filter', 'filter' => '\yii\helpers\HtmlPurifier::process' ],
			
			// integer
			[ [ 'street_id', 'number', 'building', ], 'integer' ],
			[ [ 'street_id', 'number', 'building', ], 'compare', 'operator' => '>', 'compareValue' => 0 ],
			
			[ [ 'street_id' ],
				'exist',
				'skipOnError'     => true,
				'targetClass'     => Street::class,
				'targetAttribute' => [ 'street_id' => 'id' ],
			],
		
		];
	}
	
}