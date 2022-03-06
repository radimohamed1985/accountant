<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $table->string('surname');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->char('language', 7)->default('en');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
        // DB::table('users')->insert([
        //     'surname'=>'azhaerp',
        //     'first_name'=>'azhaerp',
        //     'last_name'=>'azhaerp',
        //     'username'=>'azhaerp',
        //     'email'=>'azhaerp@azhaerp.com',
        //     'password'=>sha1('123456')
        // ]);
     

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
