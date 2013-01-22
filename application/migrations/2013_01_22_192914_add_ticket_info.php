<?php

class Add_Ticket_Info {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tickets', function($table)
		{
			$table->string('title');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tickets', function($table)
		{
			$table->drop_column('title');
		});
	}

}