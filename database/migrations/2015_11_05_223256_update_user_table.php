<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* Version 3 User table
*/
class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            /* old */
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password', 60);
            // $table->rememberToken();
            // $table->timestamps();            
            //$table->string('phone')->unique();
            //$table->integer('type_id')->unsigned();            
            //$table->foreign('type_id')->references('id')->on('type');            

            /* new */
            $table->string('password', 250)->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* old */
        Schema::drop('users');
    }
}
