@extends('layouts.posts')

@section('content')
   <div class="panel-heading">Your Posts</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="./create" class="btn btn-primary">Create Post</a>
                    <hr>
                    @if(count($posts)> 0)
                    <table class="table table-striped">
                        <tr><th>Title</th><th></th><th></th></tr>
                        @foreach($posts as $post)
                        <tr><td>{{$post->title}}</td>
                            <td></td>
                            <td><a href="./{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                            </td></tr>
                        @endforeach
                    </table>

                    @else
                    <h1>You have no posts yet!</h1>
                    @endif

                </div>


      
@endsection
