@extends('layouts.app')

@section('content')
   <div class="panel-heading">Locations</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                                <a href="./createLocation" class="btn btn-primary">Create Location</a>
                                <hr>

                                @if(count($locations)>0)
                                @foreach($locations as $location)
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="./uploads/avatars/{{$location->avatar}}" style="width:250px; height:150px; border-radius:2%; margin-right:25px; ">
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-7">
                                        <h3>{{$location->name}}</h3>
                                        <small>Created on {{$location->created_at}}</small>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                {{$locations->links()}}
                                @else
                                        <p>No locations are available.</p>
                                @endif
                                
                    </div>
                    <hr>
                    

                </div>


      
@endsection
