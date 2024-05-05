@extends('layouts/contentNavbarLayout')

@section('content')

<style>
  .section-body {
    margin-left: 40px;
    padding: 20px;
    margin-bottom: 20px;
  }
    .card {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 30px; /* Add margin to the bottom of each card */
    }

    body {
        background-color: white;
    }
</style>

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">Subscriber Manager</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">Subscriber Manager</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">

                <div class="col-sm-12">
                    <h4 class="card-title pl-1">Messenger subscriber</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bx-sync"></i> Sync subscribers</h5>
                        </div>
                        <div class="card-body">
                            <p>Sync, migrate, conversation...</p>
                            <a href="/subscriber_manager/bot_subscribers" class="card-cta d-inline-flex align-items-center">Actions<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bx-user-circle"></i> Bot subscribers</h5>
                        </div>
                        <div class="card-body">
                            <p>Subscriber actions, assign label, download...</p>
                            <a href="/subscriber_manager/bot_subscribers" class="card-cta d-inline-flex align-items-center">Actions<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bx-purchase-tag-alt"></i> Labels/tags</h5>
                        </div>
                        <div class="card-body">
                            <p>Subscriber label/tags, segmentation...</p>
                            <a href="/subscriber_manager/bot_subscribers" class="card-cta d-inline-flex align-items-center">Actions<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
