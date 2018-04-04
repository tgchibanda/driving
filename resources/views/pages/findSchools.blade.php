@extends('layouts.app')


@section('content')

<div class="panel-heading">Available Schools</div>
<div class="panel-body">
        <div class="row" align="center">
            @if(count($schools)>0)
            @foreach($schools as $school)
            <div class="col-md-4">
                    <div class="thumbnail">
                    <img src="./uploads/avatars/{{$school->school_avatar}}" style="width:300px; height:250px; border-radius:2%; margin-right:25px; ">
                    <br>
                    
                    <p><b>{{$school->school_name}}</b></p>
                    <p><font color="primary">In: {{$school->location_name}}</font></p>

                    <?php

                        $rattings = DB::table('school_reviews')->where('school_id', '=', $school->school_id)->count();
                        echo "<p>Reviews: ".$rattings."</p>";

                        $sum = DB::table('school_reviews')->where('school_id', '=', $school->school_id)->sum('school_review_rating');
                        
                        if($rattings!=0){
                            $stars = round($sum/$rattings);

                            for($i=0; $i<$stars; $i++){
                            ?>
                                <span class="fa fa-star checked"></span>
                            <?php
                        }

                        $balance = 5-$i;

                        for($j=0; $j<$balance; $j++){
                            ?>
                                <span class="fa fa-star"></span>
                            <?php
                        } 

                        }
                        else{
                            $stars = 0;
                            ?>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            <?php
                        }
                        
                        
                        

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