<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\profile;
use App\SchoolReview;

class School extends Model
{
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function reviews(){
        return $this->hasMany(SchoolReview::class);
    }

    public function scopegetStarRating(){

        $reviews =$this->reviews();
        $starCountSum = $this->reviews()->sum('school_review_rating');

        //$average = $starCountSum / $this->reviews()->count();
        return $this->hasMany(SchoolReview::class);
    }
}
