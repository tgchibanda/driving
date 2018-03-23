@extends('layouts.app')

@section('content')
   <div class="panel-heading">Schools</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                                <a href="./createSchool" class="btn btn-primary">Create School</a>
                                <hr>

                                @if(count($schools)>0)
                                @foreach($schools as $school)
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="./uploads/avatars/{{$school->avatar}}" style="width:250px; height:150px; border-radius:2%; margin-right:25px; ">
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-7">
                                        <b>{{$school->name}}</b>
                                        <p>{{$school->email}}</p>
                                        <p>{{$school->contact}}</p>
                                        <p>{{$school->about}}</p>
                                        <small>Created on {{$school->created_at}}</small>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                {{$schools->links()}}
                                @else
                                        <p>No schools are available.</p>
                                @endif
                                
                    </div>
                    <hr>
                    

                </div>


      
@endsection
