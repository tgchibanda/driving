@extends('layouts.app')

@section('content')
       <h1>{{$post->title}}</h1>
       <a href="../posts" class="btn btn-default">Go Back</a>
            <div>
                {!!$post->body!!}
            </div>
            <hr>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>

            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                    <a href="./{{$post->id}}/edit" class="btn btn-default">Edit</a>

                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                    </div>
                </div>
                @endif
            @endif
@endsection