@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Live chat</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item"><a href="/subscriber">Subscriber Manager</a>
                    </li>
                    <li class="breadcrumb-item active">Live chat</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6">
        <fieldset class="form-group" id="store_list_field">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="page_id">Accounts</label>
                </div>
                <select name="page_id" id="page_id" class="form-control">
                    <option value="">Select</option>
                </select>
            </div>
        </fieldset>
    </div>
    <div class="col-sm-12 col-md-6">
        <a href="#" class="btn btn-primary social_switch mb-1" data-value="ig">Change to Facebook</a>
    </div>
</div>

@if($noAccountConnected)
<div class="card" id="nodata">
    <div class="card-body d-flex justify-content-center align-items-center">
        <div class="empty-state text-center">
            <img class="img-fluid mb-3" style="height: 200px" src="https://app.socialnowa.io/assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
            <h2 class="mt-0">We could not find any page.</h2>
            <p class="lead">Please Log in to Facebook to continue</p>
            <a href="{{ route('facebook.login') }}" class="btn btn-primary social_switch mb-1"><i class="bx bxl-facebook-circle"></i> Login to Facebook</a>
        </div>
    </div>
</div>
</div>
@endif

@endsection
