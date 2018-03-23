<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //Table Name
    protected $table = 'testing';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timeStamps = true;

}
