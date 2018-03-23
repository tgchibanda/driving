@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li class="active"><a href="">Profile</a></li>
</ol>
<div class="panel-heading">Your Profile</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-4 col-md-offset-1" align="center">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->name}}</div>
                    <div class="panel-body">
                        <img src="./uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; border-radius:50%; margin-right:25px; ">
                            <form enctype="multipart/form-data" action="./profile" method="POST">             
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Change Profile Image</label>
                                            <input type="file" name="avatar" class="form-control">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                            <input type="submit" value="Change Pucture" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">Details</div>
                <div class="panel-body">
                        <div>Name: {{$user->name}}</div>
                        <div>Email: {{$user->email}}</div>
                        <div>Created: {{$user->created_at}}</div>
                        <div>Updated: {{$user->updated_at}}</div>
                </div>
                </div>
            </div>
    </div>
</div>
@endsection