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

            /* version 1 */
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password', 60);
            // $table->rememberToken();
            // $table->timestamps();                      

            /* version 2 */
            $table->string('phone')->unique();
            $table->integer('type_id')->unsigned();            

            $table->foreign('type_id')->references('id')->on('type');            
            /* version 3 */
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
        Schema::drop('users');
    }
}
