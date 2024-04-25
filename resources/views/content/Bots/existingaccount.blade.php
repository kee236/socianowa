@extends('layouts/contentNavbarLayout')

@section('content')
<div class="content-wrapper">
        <link rel="stylesheet" type="text/css" href="https://app.socialnowa.io/n_assets/app-assets/vendors/css/extensions/swiper.min.css?ver=1.9007">

<style>
    .widget-earnings-scroll {
        position: relative;
    }

    .widget-earnings-scroll .widget-earnings-width {
        min-width: 390px;
    }

    #widget-earnings .widget-earnings-swiper.swiper-container .swiper-slide {
        /* widget swiper slide */
        font-weight: 500;
        background-color: #F2F4F4;
        height: auto;
        width: auto !important;
        color: #828D99;
        cursor: pointer;
    }

    #widget-earnings .widget-earnings-swiper.swiper-container .swiper-slide .swiper-text {
        font-family: 'Rubik', Helvetica, Arial, serif;
    }

    #widget-earnings .widget-earnings-swiper.swiper-container .swiper-slide.swiper-slide-active {
        /* swiper slide active */
        color: #FFFFFF;
        background-color: #5A8DEE !important;
        box-shadow: 0 3px 6px 0 rgba(90, 141, 238, 0.5) !important;
    }

    #widget-earnings .wrapper-content {
        display: none;
    }

    #widget-earnings .wrapper-content.active {
        display: block;
    }

    .avatar .img-fluid {
        max-width: 50px;
    }
</style>

<div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">Your existing accounts</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="https://app.socialnowa.io/dashboard"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">Facebook account import</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-transparent shadow-none">
                    <div class="row pills-stacked">
                        <div class="col-md-3 col-sm-12">
                            <ul class="nav nav-pills flex-column text-center text-md-left">
                                <!-- Display only existing connected accounts -->
                                @foreach($existingAccounts as $account)
                                <li class="nav-item mb-1">
                                    <!-- Display existing account information -->
                                    <span class="font-small-3 bold">{{ $account->name }}</span>
                                    <button class="delete_account btn-circle btn btn-danger btn-sm float-right" table_id="{{ $account->id }}" data-toggle="tooltip" data-placement="bottom" title="Do you want to remove this account from our database? You can import again.">
                                        <i class="bx bx-trash-alt"></i>
                                    </button>
                                </li>
                                <!-- Display tabs for each account type -->
                                <li class="nav-item mt-1">
                                    <a class="nav-link" id="stacked-pill_{{ $account->type }}-{{ $account->id }}" data-toggle="pill" href="#vertical-pill_{{ $account->type }}-{{ $account->id }}" aria-expanded="true">
                                        {{ ucfirst($account->type) }} ({{ $account->count }})
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="tab-content">
                                <!-- Display content for each account type -->
                                @foreach($existingAccounts as $account)
                                <div role="tabpanel" class="tab-pane" id="vertical-pill_{{ $account->type }}-{{ $account->id }}" aria-labelledby="stacked-pill_{{ $account->type }}-{{ $account->id }}" aria-expanded="true">
                                    <div class="widget-earnings-scroll table-responsive">
                                        <h4 class="card-title">{{ ucfirst($account->type) }} list <span class="text-muted">({{ $account->count }} {{ ucfirst($account->type) }})</span></h4>
                                        <div class="card-title-details d-flex align-items-center">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <!-- Display account list -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete_confirmation" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                    <h4 class="modal-title text-center"><i class="bx bx-flag"></i> Deletion report</h4>
                </div>
                <div class="modal-body" id="delete_confirmation_body"></div>
            </div>
        </div>
    </div>
</div>
@Endsection
