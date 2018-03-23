@extends('layouts.app')

@section('content')
   <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                        <div class="row">
                                <div class="col-md-5">
                                        <a href="./posts/home">
                                            <image src="../public/images/blogging.jpg" style="height:200px; width:350px;">
                                        </a>
                                </div>
                                
                                <div class="col-md-1">
                                </div>

                                <div class="col-md-5">
                                    <a href="./locations">
                                        <image src="../public/images/location.png" style="height:200px; width:350px;">
                                    </a>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                    
                                    <div class="col-md-10">
                                            <a href="./schools">
                                                <image src="../public/images/school.jpg" style="height:200px; width:720px;">
                                            </a>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                </div>
                                <hr>

                    

                </div>


      
@endsection
