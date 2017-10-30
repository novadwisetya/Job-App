@extends('layouts.application')
@section('content')

    <!--Form without header-->
    <div class="card" style="width:600px;">
        {!! Form::open(['route' => 'signup.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        <div class="card-body mx-4">
            <!--Header-->
            <div class="text-center">
                <h3 class="indigo-text mb-5"><strong>Register</strong></h3>
            </div>
            <div class="text-center">
            </div>
            <div class="row">
                            <!-- ================ colomn 1 ============================ -->
                    <div class="col">
                        <div class="md-form">
                        <i class="fa fa-user prefix indigo-text"></i>
                            <input type="text" id="Form-email2" class="form-control" name="first_name">
                            <label for="Form-email2">First name</label>  
                            <span class="text-danger">{!! $errors->first('first_name') !!}</span>   
                        </div>   
                        

                        
                    </div>
                    <div class="col">
                        <div class="md-form">
                        <i class="fa fa-user prefix indigo-text"></i>
                            <input type="text" id="Form-email2" class="form-control" name="last_name">
                            <label for="Form-email2">Last name</label>  
                            <span class="text-danger">
                            {!! $errors->first('last_name') !!}
                        </span>   
                        </div>   
                            
                    </div>
            </div>
        

                <div class="md-form">
                    <i class="fa fa-envelope prefix indigo-text"></i>
                    <input type="text" id="Form-email2" class="form-control" name="email">
                    <label for="Form-email2">Email</label>
                    <span class="text-danger">{!! $errors->first('email') !!}</span>
                </div>

                

                        <!-- ================ colomn 2 ============================ -->
        <div class="row">  
                <div class="col">
                    <div class="md-form">
                        <i class="fa fa-lock prefix indigo-text"></i>
                        <input type="password" id="Form-pass2" class="form-control" name="password">
                        <label for="Form-pass2">Password</label>  
                        <span class="text-danger"> {!! $errors->first('password') !!} </span>           
                    </div>
                        
                </div>      
                <div class="col">
                    
                    <div class="md-form">
                        <i class="fa fa-lock prefix indigo-text"></i>
                        <input type="password" id="Form-pass2" class="form-control" name="password_confirmation">
                        <label for="Form-pass2">Confirm password</label>      
                        <span class="text-danger">{!! $errors->first('password_confirmation') !!}    </span>          
                    </div>
                                    
                </div> 
        </div>
        <div class="row">
            <div class="col align-self-center text-center">
                <input type="submit" class="btn btn-indigo indigo" value="Register" data-toggle="modal" data-target="#modalNotice">
                 <!-- ================ Modal ============================ -->
                            <!-- Central Modal Medium Success -->
                        @if (Session::has('notice'))
                        <div class="modal fade" id="modalNotice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                <!--Content-->
                                <div class="modal-content text-center">
                                    <!--Header-->
                                    <div class="modal-header d-flex justify-content-center">
                                        <p class="heading">Success</p>
                                    </div>

                                    <!--Body-->
                                    <div class="modal-body">

                                        <i class="fa fa-times fa-4x animated rotateIn"></i>
                                        <p>Something wrong</p>

                                    </div>

                                    <!--Footer-->
                                    <div class="modal-footer flex-center">
                                        <a type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">Close</a>
                                    </div>
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>  
                        @endif
            </div>
        </div>  
        <div class="row">
            <div class="col text-center">
            <p class="font-small grey-text">Already have an account?<a href="/login"> Log in</a></p>
            </div>
        </div>
    {!! Form::close() !!}  

    <!--/Form without header-->
@endsection