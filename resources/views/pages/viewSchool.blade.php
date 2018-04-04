<!DOCTYPE html>
<html lang="en">
<head>



</head>
<body>
    
@extends('layouts.view')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">

                <div class="item active">
                        <img src="../uploads/banners/just.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                          
                        </div>
                      </div>
    
                @foreach($gallery as $gallery)
                <div class="item">
                        <img src="../uploads/banners/{{$gallery->gallery_image}}" style="width:100%; height:50%;">
                        
                      </div>                   
                @endforeach


          
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

























<div class="panel-body">
        @foreach($school as $school)
    <div class="row">
        <div class="col-md-6" align="center">
            <div class="panel panel-default">
                <div class="panel-heading">{{$school->school_name}}</div>
                    <div class="panel-body">

                        
                        <img src="../uploads/avatars/{{$school->school_avatar}}" 
                        class="img-responsive" style="width:370px; height:255px; border-radius:2%; margin-right:25px; ">
                        
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
                                    <star-rating></star-rating>
                                    @foreach($reviews as $review)
                                        <li>
                                            {{$review->school_review_description}}
                                        </li>                    
                                    @endforeach
                                </div>
                            </div>
                </div>
        </div>
    </div>
</div>

@endsection




</body>
</html>
