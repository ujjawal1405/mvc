<?php 

class Model_Salesman_Price extends Model_Core_Table
{
	public function __construct()
	{
		parent::__construct();
		$this->setTableName('salesman_price')
			->setPrimaryKey('entity_id');
	}
}