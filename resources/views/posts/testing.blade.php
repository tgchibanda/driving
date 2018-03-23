@extends('layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card">
            <div style="background-color :#193F72; padding:10px;">
                <h4 class="title"><font color="white">Register Partner</font></h4>
            </div>
            <div class="card-content">
            
            <?php
            
            if(isset($_GET['success'])==true){
                ?>
                <div class="alert alert-success" id="delete_user" role="alert">
                    User successfuly created!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                
                <?php
            }
            ?>
            
            
                <form method="POST" action="./testingCreate">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Body</label>
                                <input type="text" name="body" id="body" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" name="submit" id="submit" class="btn btn-primary pull-right">Add Test</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        
    </div>
@endsection