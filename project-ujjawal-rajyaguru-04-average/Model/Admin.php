<?php 

class Model_Admin extends Model_Core_Table
{	
	public function __construct()
	{
		$this->setTableName('admin')->setPrimaryKey('admin_id');
	}
}