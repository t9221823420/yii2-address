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

class m000000_000006_yozh_address_address_table_dev extends Migration
{
	protected static $_table = '{{%yozh_address_address}}';
	
	public function safeUp( $params = [] )
	{
		
		parent::safeUp( [
			'mode' => 1 ? self::ALTER_MODE_UPDATE : self::ALTER_MODE_IGNORE,
		] );
		
	}
	
	public function getColumns( $columns = [] )
	{
		
		return parent::getColumns( [
			'street_id' => $this->integer()->notNull(),
			'number'    => $this->integer()->null(),
			'letter'    => $this->string()->null(),
			'building'  => $this->integer()->null(),
			'zip'       => $this->string()->null()->after( 'building' ),
			
			'additional_info' => $this->string()->null(),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			[
				'refTable'   => \yozh\address\models\Street::getRawTableName(),
				'refColumns' => 'id',
				'columns'    => 'street_id',
				//'onDelete'   => self::CONSTRAINTS_ACTION_RESTRICT,
			],
		
		], $references );
	}
	
}