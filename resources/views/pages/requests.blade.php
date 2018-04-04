@extends('layouts.app')


@section('content')

<div class="panel-heading">Your Requests</div>
<div class="panel-body">
        <div class="col-md-12" align="center">
            @if(count($schools)>0)
            @foreach($schools as $school)
            <div class="col-md-4">
                    <div class="thumbnail">
                    <img src="./uploads/avatars/{{$school->avatar}}" style="width:250px; height:200px; border-radius:2%; margin-right:25px; ">
                    <br>
                    
                    <p><b>{{$school->name}}</b></p>
                    <font color="primary">{{$school->email}}</font>
                    <p><small>Created on {{$school->created_at}}</small></p>

                    <?php

                        $qry = DB::table('friendships')->where('user_requested', '=', $school->school_id)
                        ->where('requester', '=', Auth::user()->id)->first();
                        if($qry==''){
                    ?>
                    <p><a href="./accept/{{$school->id}}/{{$school->name}}" class="btn btn-success">Accept</a></p>
                        <?php
                        }
                        else {
                               ?>
                                <p><a class="btn btn-default">Un-Follow</a></p>
                                <?php
                        }
                        ?>
            </div>
                    
            </div>
            @endforeach
            
            @else
                    <p>No requests are available.</p>
            @endif
            
</div>
    <hr>
    {{$schools->links()}}
    
@endsection