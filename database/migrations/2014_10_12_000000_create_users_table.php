<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->boolean('status');
            $table->boolean('admin')->default('0');
            $table->string('duration');
            $table->timestamp('activated_at');
            $table->rememberToken();
            $table->timestamps();
        });

        //create admin username
          App\User::create(array(
            'username' => 'admin',
            'admin' => '1',
            'password' =>  Hash::make('admin')
        ));
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
