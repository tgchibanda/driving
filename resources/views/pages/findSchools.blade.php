@extends('layouts.app')


@section('content')

<div class="panel-heading">Available Schools</div>
<div class="panel-body">
        <div class="col-md-12" align="center">
            @if(count($schools)>0)
            @foreach($schools as $school)
            <div class="col-md-4">
                    <div class="thumbnail">
                    <img src="./uploads/avatars/{{$school->school_avatar}}" style="width:250px; height:200px; border-radius:2%; margin-right:25px; ">
                    <br>
                    
                    <p><b>{{$school->school_name}}</b></p>
                    <p><font color="primary">In: {{$school->location_name}}</font></p>


                    <?php

                        $qry = DB::table('friendships')->where('user_requested', '=', $school->id)
                        ->where('requester', '=', Auth::user()->id)->first();
                        if($qry==''){
                            
                    ?>
                    <p><a href="./viewSchool/{{$school->school_id}}" class="btn btn-success">View Profile</a></p>
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
                    <p>No schools are available.</p>
            @endif
            
</div>
    <hr>
    {{$schools->links()}}
    
@endsection