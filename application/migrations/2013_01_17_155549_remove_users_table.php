<?php

class Remove_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('users');
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
		    $table->create();
		    $table->increments('id')->unique();
		    $table->string('username');
		    $table->string('email');
		    $table->string('password');
		    $table->timestamps();
		});
	}

}