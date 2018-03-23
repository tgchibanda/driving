
@extends('layouts.posts')

@section('content')
<div class="panel-heading">Create Location</div>
<div class="panel-body">
        <form enctype="multipart/form-data" action="./createLocation" method="POST">             
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                            <label class="control-label">Location Name</label>
                            <input type="text" name="name" class="form-control">
                            <label class="control-label">Location City</label>
                            <select name="city" id="city" class="form-control">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            <label class="control-label">Upload Location Image</label>
                        <input type="file" name="avatar" class="form-control">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                        <input type="submit" class="btn btn-sm btn-primary pull-right">
        </form>
</div>
@endsection