<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\profile;

class School extends Model
{
    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
