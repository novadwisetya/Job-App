@extends('layouts.application')
@section('content')
    <div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Error</p>
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
@endsection
