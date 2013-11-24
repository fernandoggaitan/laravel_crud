<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table('users', function($table){
                $table->create();
                $table->increments('id');
                $table->string('email');
                $table->string('real_name');
                $table->string('password');
                $table->integer('level');
                $table->boolean('active');
                $table->timestamps();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('users');
	}

}