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

                   
                   
                                <p><a class="btn btn-default">Un-Follow</a></p>
                                
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