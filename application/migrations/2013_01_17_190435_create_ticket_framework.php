<?php

class Create_Ticket_Framework {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function($table)
		{
		    $table->increments('id')->unique();
		    $table->string('reporter');
		    $table->string('status');
		    $table->string('flags');
		    $table->string('project');
		    $table->string('assigned');
		    $table->text('content');
		    $table->timestamps();
		});

		Schema::create('comments', function($table)
		{
		    $table->increments('id')->unique();
		    $table->integer('issue_id');
		    $table->string('user');
		    $table->text('content');
		    $table->timestamp('created_at');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
		Schema::drop('comments');
	}

}