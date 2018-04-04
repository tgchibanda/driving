<?php

namespace App\Traits;
use App\Friendship;

trait Friendable{
    public function test(){
        return 'hie';
    }

    public function followSchool($requested_school_id){

        $Friendship = Friendship::create([
            'requester' => $this->id,
            'user_requested' => $requested_school_id,

        ]);
        if($Friendship){
            return $Friendship;
        }
        return 'Failed';
    }
}
?>