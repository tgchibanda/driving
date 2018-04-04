<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_reviews', function (Blueprint $table) {
            $table->increments('school_review_id');
            $table->unsignedInteger('user_id');
            $table->string('school_review_headline')->nullable();
            $table->string('school_review_description')->nullable();
            $table->string('school_review_rating')->nullable();
            $table->integer('school_id')->nullable();
            $table->tinyInteger('school_review_approved')->nullable();
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
        Schema::dropIfExists('school_reviews');
    }
}
