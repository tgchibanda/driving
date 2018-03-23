<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['province', 'city', 'about', 'school_id'];

    public function school(){
        return $this->belongsTo(School::class);
    }
}
