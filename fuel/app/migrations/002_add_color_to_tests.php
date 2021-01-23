<?php

namespace Fuel\Migrations;

class Add_color_to_tests
{
	public function up()
	{
		\DBUtil::add_fields('tests', array(
			'color' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		));
	}

	public function down()
	{
		\DBUtil::drop_fields('tests', array(
			'color'
		));
	}
}