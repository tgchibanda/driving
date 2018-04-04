@extends('layouts.view')
@section('content')
<div class="panel-body">
        @foreach($school as $school)
    <div class="row">
        <div class="col-md-6" align="center">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->school_name}}</div>
                    <div class="panel-body">

                        
                        <img src="../uploads/avatars/{{$school->school_avatar}}" 
                        class="img-responsive" style="width:100%; height:100%; border-radius:2%; margin-right:25px; ">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Details</div>
                <div class="panel-body">
                        <div>Email: {{$school->school_email}}</div>
                        <div>Contact: {{$school->school_contact}}</div>
                        <hr>
                        <div>Bio: {{$school->school_about}}</div>
                        <hr>
                        
                        <input type="submit" value="Write a review" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
                        <hr>

                        

                       @include('pages.review_school')
                </div>
                </div>
            </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
                <div class="panel panel-default">
                        <div class="panel-heading">Reviews</div>
                            <div class="panel-body">
                                <div class="container">
                                        @foreach($reviews as $review)
                                <div class="row">
                                    <div class="col-md-2">
                                            <img src="../uploads/avatars/{{$review->avatar}}" 
                                            class="img-responsive" style="width:110px; height:105px; border-radius:50%; margin-right:25px; ">
                                    </div>
                                    <div class="col-md-6">
                                            <p><b>{{$review->name}}</b></p>
                                            <p>{{$review->school_review_headline}}</p>
                                            {{$review->school_review_description}}
                                            <br>
                                            <?php

                                            for($j=0; $j<$review->school_review_rating; $j++){
                                            ?>
                                                <span class="fa fa-star checked"></span>
                                            <?php
                                                } 

                                                ?>
                                    </div>
                                </div> 
                                <hr>
                                    @endforeach
                                </div>
                            </div>
                </div>
        </div>
    </div>
</div>

@endsection