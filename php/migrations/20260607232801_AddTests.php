<?php

use Phpmig\Migration\Migration;

class AddTests extends Migration
{
    /**
     * Do the migration
     */
	public function up()
	{
		$sql ="
		CREATE TABLE tests(
			`id` integer(11) NOT NULL AUTO_INCREMENT,
			`name` varchar(190) NOT NULL,
			`delete_flg` boolean NOT NULL DEFAULT false,
			`created_at` datetime DEFAULT CURRENT_TIMESTAMP(),
			`updated_at` datetime DEFAULT CURRENT_TIMESTAMP(),
			PRIMARY KEY (`id`)
			);
			";
		$container = $this -> getContainer();
		$container['db']->query($sql);
	}

	/**
     * Undo the migration
     */
	public function down()
	{
		$sql = "
		DROP TABLE tests
		";
		$container = $this->getContainer();
		$container['db']->query($sql);
	}
}
