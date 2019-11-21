<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::table('users', function (Blueprint $table) {
			$table->string('name', 191)->change();
			$table->string('email', 191)->nullable()->change();
			$table->string('password', 191)->nullable()->change();
			$table->integer('twitter_id')->nullable()->change();
			$table->string('access_token', 191)->nullable()->change();
			$table->string('access_token_secret', 191)->nullable()->change();
			$table->string('avatar', 191)->nullable()->change();
			$table->string('profile', 191)->nullable()->change();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
