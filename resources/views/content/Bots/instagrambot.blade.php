@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-wrapper">
        <div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Instagram Bot</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="https://app.socialnowa.io/dashboard"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Instagram Bot</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="section-body">
    <div class="row">


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                            <i class="bx bxs-cog"></i> Bot settings</h5>
                    </div>
                    <div class="card-body">
                        <p>Bot reply, get started, ice breakers etc</p>
                        <a href="https://app.socialnowa.io/messenger_bot/bot_list/ig" class="card-cta d-inline-flex align-items-center">Actions</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                            <i class="bx bxs-cog"></i> Post-back manager</h5>
                    </div>
                    <div class="card-body">
                        <p>Postback ID &amp; postback data management</p>
                        <a href="https://app.socialnowa.io/messenger_bot/template_manager/ig" class="card-cta d-inline-flex align-items-center">Actions</a>
                    </div>
                </div>
            </div>

                                                <!-- Instagram User input flow section -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                <h5 class="card-title"><i class="bx bxs-cog"></i> User input flow &amp; custom fields                                </h5>
                            </div>
                            <div class="card-body">
                                <p>Create flow campaign &amp; custom fields to store user`s data</p>

                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="card-cta d-inline-flex align-items-center" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>
                                    <div class="dropdown-menu ">
                                        <div class="dropdown-header">Tools</div>
                                        <a class="dropdown-item has-icon" href="https://app.socialnowa.io/custom_field_manager/campaign_list/ig"><i class="bx bxs-checkbox-checked mr-50"></i> User input flow campaign                                        </a>
                                        <a class="dropdown-item has-icon" href="https://app.socialnowa.io/custom_field_manager/custom_field_list/ig"><i class="bx bxs-checkbox-checked mr-50"></i> Custom fields                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>
    </div>
@endsection
