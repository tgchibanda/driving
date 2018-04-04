@extends('layouts.app')

@section('content')
   <div class="panel-heading">Manage Your School</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                                @if(count($schools)>0)
                                @foreach($schools as $school)
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="./uploads/avatars/{{$school->school_avatar}}" style="width:250px; height:150px; border-radius:2%; margin-right:25px; ">
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-7">
                                        <b>{{$school->school_name}}</b>
                                        <p>{{$school->school_email}}</p>
                                        <p>{{$school->school_contact}}</p>
                                        <p>{{$school->school_about}}</p>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                {{$schools->links()}}
                                @else
                                <a href="./createSchool" class="btn btn-primary">Create School</a>
                                <hr>
                                        <p>No school available.</p>
                                @endif
                                
                    </div>
                    <hr>
                    

                </div>


      
@endsection
