@extends('layouts.application')
@section('content')


    <!--Form without header-->
    <div class="card" style="width:400px;">

        <div class="card-body mx-4">

           
            <!--Header-->
            <div class="text-center">
                <h3 class="indigo-text mb-5"><strong>Login</strong></h3>
            </div>


            <!--Body-->
            {!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            <div class="md-form form-group">
                <i class="fa fa-envelope prefix indigo-text"></i>
                <input type="email" id="form91" class="form-control validate" name="email">
                <label for="form91" data-error="wrong" data-success="right">Email</label>
            </div>
    
            <div class="md-form form-group">
                <i class="fa fa-lock prefix indigo-text"></i>
                <input type="password" id="form92" class="form-control validate" name="password">
                <label for="form92" data-error="wrong" data-success="right">Password</label>
            </div>
            
            <!--Grid row-->
            <div class="md-form form-group">
                <div class="row justify-content-md-center">        
                    <input type="submit" class="btn btn-indigo indigo" value="Login"> <br>
                </div>
            </div>
            <p class="font-small grey-text">Not a member? <a href="/signup" class="blue-text ml-1">Register.</a></p>    
           
            {!! Form::close() !!}
            <!--Grid row-->
        </div>
   
    </div>
    <!--/Form without header-->

@endsection