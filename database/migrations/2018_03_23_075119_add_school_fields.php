<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSchoolFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schools', function($table){
            $table->string('about');
            $table->string('location');
            $table->integer('contact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function($table){
            $table->dropColumn('address');
            $table->dropColumn('about');
            $table->dropColumn('location');
            $table->dropColumn('contact');
        });
    }
}
