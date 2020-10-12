<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUserAdminsTable.
 */
class CreateUserAdminsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_admins', function(Blueprint $table) {
            $table->increments('id');

            //people data
            $table->string('name', 50);

            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254)->nullable();

            //$table->rememberToker();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_admins', function(Blueprint $table) {

		});

		Schema::drop('user_admins');
	}
}
