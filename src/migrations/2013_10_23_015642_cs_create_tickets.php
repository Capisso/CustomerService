<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CsCreateTickets extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->text('body');
            $table->enum('priority', array('normal', 'critical'))->default('normal');
            $table->enum('status', array('new', 'assigned', 'in-progress', 'more-info', 'hold', 'solved', 'closed'))->default('new');

            $table->integer('customer_id')->unsigned();
            $table->integer('admin_group_id')->unsigned()->nullable()->default(null);
            $table->integer('assigned_user_id')->unsigned()->nullable()->default(null);

            $table->timestamps();

            $table->foreign('admin_group_id')->references('id')->on('groups');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('assigned_user_id')->references('id')->on('users');
        });

        Schema::create('ticket_responses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();

            $table->text('body');

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
		Schema::drop('ticket_responses');
	}

}
