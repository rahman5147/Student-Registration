<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('student', function($table) {
			$table->increments('id');
			$table->string('email');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('no_phone');
			$table->string('city')->nullable();
			$table->string('address')->nullable();
			$table->string('postcode')->nullable();
			$table->string('country')->nullable();
			$table->string('password');
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
		Schema::drop('student');
	}

}
