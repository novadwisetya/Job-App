@extends('layouts.application')
@section('content')

    <!--Form without header-->
    <div class="card animated fadeInUp" style="width:600px;">
    {!! Form::open(['route' => 'join_post', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}

        <div class="card-body mx-4">

        

            <!--Header-->
            <div class="text-center">
                <h3 class="indigo-text mb-5"><strong>Apply</strong></h3>
            </div>
            
            <!--Body-->

        <div class="row">
                        <!-- ================ colomn 1 ============================ -->
                <div class="col">
                    <div class="md-form">
                    @if (Sentinel::check())
                    {{ Form::hidden('id', Sentinel::getUser()->id) }}
                        @else
                        @endif
                        <i class="fa fa-user prefix indigo-text"></i>
                        <input type="text" id="Form-email2" class="form-control" name="name">
                        <label for="Form-email2">Full name</label>  
                    </div>   
                    <div class="text-danger">
                        
                    </div> 
                </div>
                <div class="col">  
                    <div class="md-form">
                        <i class="fa fa-envelope prefix indigo-text"></i>
                        <input type="text" id="Form-email2" class="form-control" name="email">
                        <label for="Form-email2">Email</label>
                    </div>

                    <div class="text-danger">
                        
                    </div>
                </div>
        </div>  
        <div class="row">
                <div class="col">
                    <div class="md-form pb-3">
                    <i class="fa fa-address-book prefix indigo-text"></i>
                        <input type="text" id="Form-pass2" class="form-control" name="contact">
                        <label for="Form-pass2">Contact</label>                
                    </div>

                    <div class="text-danger">
                        
                    </div>  
                   
                </div>
                <div class="col">
                    <div class="md-form pb-3">
                        <i class="fa fa-address-book prefix indigo-text"></i>
                        <input type="text" id="Form-pass2" class="form-control" name="address">
                        <label for="Form-pass2">Address</label>                
                    </div>

                    <div class="text-danger">
                       
                    </div>   
                </div> 
            </div> 
            <div class="md-form">
                <p class="grey-text">Upload CV</p>
                <input type="file" name="cv"/>              
            </div>
            <div class="md-form align-self-center text-center">
                <input type="submit" class="btn btn-indigo indigo">            
            </div>
                                  
        
    {!! Form::close() !!}  
    </div>
    <!--/Form without header-->
@endsection