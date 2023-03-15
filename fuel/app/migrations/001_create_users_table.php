<?php

namespace Fuel\Migrations;
use Fuel\Core\DBUtil;

class Create_users_table
{
	public function up()
	{
		DBUtil::create_table('users_table', array(
			'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
			'name' => array('type' => 'varchar', 'constraint' => 255),
			'email' => array('type' => 'varchar', 'constraint' => 255),
			'password' => array('type' => 'varchar', 'constraint' => 255),
			'created_at' => array('type' => 'datetime', 'null' => true), 
			'updated_at' => array('type' => 'datetime', 'null' => true)
		), array('id'));
	}

	public function down()
	{
		DBUtil::drop_table('users_table');
	}
}