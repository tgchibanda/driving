
@extends('layouts.app')

@section('content')

<div class="panel-heading">Create School</div>
<div class="panel-body">
        <form enctype="multipart/form-data" action="./createSchool" method="POST">             
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                            <label class="control-label">School Name</label>
                            <input type="text" name="name" class="form-control">
                            <label class="control-label">School Email</label>
                            <input type="text" name="email" class="form-control">
                            <label class="control-label">School Contact</label>
                            <input type="text" name="contact" class="form-control">
                            <label class="control-label">School City</label>
                            <select name="" id="" class="form-control">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            <label class="control-label">School Location</label>
                            <select name="location" id="location" class="form-control">
                                @foreach($locations as $location)
                                    <option value="{{$location->location_id}}">{{$location->location_name}}</option>
                                @endforeach
                            </select>
                            <label class="control-label">School Bio</label>
                            <textarea class="form-control" name="about" id="about" rows="5"></textarea>
                            <label class="control-label">Upload Avatar Image</label>
                        <input type="file" name="avatar" class="form-control">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                        <input type="submit" class="btn btn-sm btn-primary pull-right">
        </form>
</div>
@endsection

