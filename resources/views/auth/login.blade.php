@extends('layouts.application')
@section('content')

@extends('layouts.application')
@section('content')


    <!--Form without header-->
    <div class="card" style="width:400px;">

        <div class="card-body mx-4">

            <!--Header-->
            <div class="text-center">
                <h3 class="pink-text mb-5"><strong>Login</strong></h3>
            </div>

            <!--Body-->
            {!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            <div class="md-form">
                <input type="text" id="Form-email2" class="form-control" name="email">
                <label for="Form-email2">Email</label>
            </div>
            <div class="md-form pb-3">
                <input type="password" id="Form-pass2" class="form-control" name="password">
                <label for="Form-pass2">Password</label>        
            </div>
            <div class="md-form">
               <!-- {!! Form::label('remember', 'Remember Me', array('class' => 'col-lg-3 control-label')) !!}
                {!! Form::checkbox('remember', null, array('class' => 'form-control')) !!} -->
            </div>
            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4" >

                <input type="submit" class="btn btn-primary red">

                <div class="col-md-6">
                   <!-- <p class="font-small grey-text d-flex justify-content-end"><a href="#" class="blue-text ml-1"> Register</a></p> -->
                </div>
                <!--Grid column-->
            </div>
            {!! Form::close() !!}
            <!--Grid row-->
        </div>
   
    </div>
    <!--/Form without header-->

@endsection