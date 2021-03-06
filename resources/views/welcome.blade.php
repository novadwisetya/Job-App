@extends('layouts.application')
@section('content')


@if (Sentinel::check())
<ul class="animated fadeInUp">
    <li>
        <div class="avatar">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar" class="rounded-circle img-responsive z-depth-1"  style="width:150px;margin:auto;">
        </div>
        <h1 class="h1-responsive font-bold" style="color:white;">Hello, {!! Sentinel::getUser()->first_name !!}</h1></li>
    <li>
        <p style="color:white;">"You are awesome"</p>
    </li>
    <li>
        
        <a  href="profile" class="btn btn-primary btn-lg " rel="nofollow" style="background-color:#00695c;">Status</a>
        <a  href="/join" class="btn btn-default btn-lg " rel="nofollow" style="background-color:#0d47a1;">Join us!</a>
    </li>
</ul> 
@else
<ul class="animated fadeInUp">
    <li>
        <h1 class="h1-responsive font-bold" style="color:white;">Join us!</h1></li>
    <li>
        <p style="color:white;">Job sites, newspapers, associations and company career pages.</p>
    </li>
    <li>
        <a href="/signup" class="btn btn-primary btn-lg" rel="nofollow">Register</a>
        <a href="/login" class="btn btn-default btn-lg" rel="nofollow">Login</a>
    </li>
</ul>    
@endif

@endsection