<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('containers', function($table) {
            $table->increments('id');
            $table->string('container_id')->unique();
            $table->string('name');
            $table->string('image_name');
            $table->string('ports');
            $table->string('volumes');
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
        Schema::drop('containers');
	}

}
