@extends('layouts/contentNavbarLayout')

@section('content')
<div class="content-wrapper">


<style type="text/css">
    .card-body {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        text-align: center; /* Center the content */
        padding: 20px; /* Add padding for better appearance */
    }
</style>

<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top box"> <!-- Add "box" class here -->
            <h5 class="content-header-title float-left pr-1 mb-0">Bot manager</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item"><a href="/bots/facebook">Messenger Bot</a></li>
                    <li class="breadcrumb-item active">Bot manager</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6"></div>
    <div class="col-sm-12 col-md-6">
        <a href="#" class="btn btn-primary social_switch mb-1" data-value="fb">Change to Instagram</a>
    </div>
</div>



    <div class="card" id="nodata">
        <div class="card-body">
            <div class="empty-state">
                <img class="img-fluid" style="height: 200px" src="https://app.socialnowa.io/assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
                <h2 class="mt-0">We could not find any page.</h2>
                <p class="lead">Please Log in to facebook to continue</p>
                <a href="{{ route('facebook.login') }}" class="btn btn-primary social_switch mb-1"><i class="bx bxl-facebook-circle"></i> Login to Facebook</a>
            </div>
        </div>
    </div>




  </div>
@Endsection
