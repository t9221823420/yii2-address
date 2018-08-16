<?php

/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 10.08.2018
 * Time: 10:11
 */

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;
use yozh\base\components\utils\ArrayHelper;

class m000000_000004_yozh_address_district_table_dev extends Migration
{
	protected static $_table = '{{%yozh_address_district}}';
	
	public function safeUp( $params = [] )
	{
		
		parent::safeUp( [
			'mode' => 1 ? self::ALTER_MODE_UPDATE : self::ALTER_MODE_IGNORE,
		] );
		
	}
	
	public function getColumns( $columns = [] )
	{
		
		return parent::getColumns( [
			'name'    => $this->string(),
			'city_id' => $this->integer()->notNull(),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			[
				'refTable'   => \yozh\address\models\City::getRawTableName(),
				'refColumns' => 'id',
				'columns'    => 'city_id',
				//'onDelete'   => self::CONSTRAINTS_ACTION_RESTRICT,
			],
		
		], $references );
	}
	
}