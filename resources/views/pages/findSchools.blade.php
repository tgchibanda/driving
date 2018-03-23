@extends('layouts.app')


@section('content')

<div class="panel-heading">Your Schools</div>
<div class="panel-body">
        <div class="col-md-12" align="center">
            @if(count($schools)>0)
            @foreach($schools as $school)
            <div class="col-md-4">
                    <div class="thumbnail">
                    <img src="./uploads/avatars/{{$school->avatar}}" style="width:250px; height:200px; border-radius:2%; margin-right:25px; ">
                    <br>
                    <p><font color="primary">In: {{$school->location_name}}</font></p>
                    <b>{{$school->name}}</b>
                    <p>{{$school->email}}</p>
                    <p>{{$school->contact}}</p>
                    
                    <small>Created on {{$school->created_at}}</small>
                
            </div>
                    <p>{{$school->about}}</p>
            </div>
            @endforeach
            
            @else
                    <p>No schools are available.</p>
            @endif
            
</div>
    <hr>
    {{$schools->links()}}
    
@endsection