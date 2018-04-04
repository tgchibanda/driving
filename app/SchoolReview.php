<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolReview extends Model
{
    protected $table = 'school_reviews';

    protected $fillable = [
        'school_review_headline',
        'school_review_description',
        'school_review_rating',
        'school_id'
    ];
}
