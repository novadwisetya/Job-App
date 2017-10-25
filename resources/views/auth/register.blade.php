@extends('layouts.application')
@section('content')

    <!--Form without header-->
    <div class="card" style="width:600px;">
    {!! Form::open(['route' => 'signup.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

        <div class="card-body mx-4">

        

            <!--Header-->
            <div class="text-center">
                <h3 class="pink-text mb-5"><strong>Sign up</strong></h3>
            </div>
            
            <!--Body-->

        <div class="row">
                        <!-- ================ colomn 1 ============================ -->
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="Form-email2" class="form-control" name="first_name">
                        <label for="Form-email2">First name</label>  
                    </div>   
                    <div class="text-danger">
                        {!! $errors->first('first_name') !!}
                    </div>   

                    
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="Form-email2" class="form-control" name="last_name">
                        <label for="Form-email2">Last name</label>  
                    </div>   
                    <div class="text-danger">
                        {!! $errors->first('last_name') !!}
                    </div>       
                </div>
        </div>
        

                <div class="md-form">
                    <input type="text" id="Form-email2" class="form-control" name="email">
                    <label for="Form-email2">Email</label>
                </div>

                <div class="text-danger">
                    {!! $errors->first('email') !!}
                </div>

                        <!-- ================ colomn 2 ============================ -->
        <div class="row">  
                <div class="col">
                    <div class="md-form pb-3">
                        <input type="password" id="Form-pass2" class="form-control" name="password">
                        <label for="Form-pass2">Password</label>                
                    </div>

                    <div class="text-danger">
                        {!! $errors->first('password') !!}
                    </div>  
                </div>      
                <div class="col">
                    
                    <div class="md-form pb-3">
                        <input type="password" id="Form-pass2" class="form-control" name="password_confirmation">
                        <label for="Form-pass2">Confirm password</label>                
                    </div>

                    <div class="text-danger">
                        {!! $errors->first('password_confirmation') !!}
                    </div>               
                </div> 
        </div>
            

            

            

            

            

            

            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4">

                <!--Grid column-->
                <div class="col-md-3 col-md-6">
                <input type="submit" class="btn btn-primary red">
                <!--{!! Form::submit('Register', array('class' => 'btn btn-pink btn-block btn-rounded z-depth-1')) !!}-->          
                
                </div>
                
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <!-- <p class="font-small grey-text d-flex justify-content-end"><a href="#" class="blue-text ml-1">Login</a></p> -->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>






        

    {!! Form::close() !!}  
    </div>
    <!--/Form without header-->
@endsection