@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-wrapper">
        <link rel="stylesheet" type="text/css" href="https://app.socialnowa.io/n_assets/app-assets/vendors/css/charts/apexcharts.css?ver=1.9007">
<script src="https://app.socialnowa.io/n_assets/app-assets/vendors/js/charts/apexcharts.min.js?ver=1.9007"></script>

<style>
    #search_page_id {
        min-width: 150px !important;
    }

    .list-unstyled-border li {
        border-bottom: none;
        margin-bottom: 10px;
        padding-top: 0;
    }

    .tickets-list .ticket-item {
        border-bottom: none;
        padding: 0;
        margin-bottom: 14px;
    }

    .tickets-list .ticket-item h4 {
        margin-bottom: 9px;
    }

    .media {
        margin-bottom: 12px;
    }

    .media .media-title {
        margin-bottom: 0;
        font-size: 14px;
    }

    .ticket-title h4 {
        color: #000 !important;
        margin-bottom: 3px !important;
        font-weight: 500 !important;
    }

    .website {
        font-size: 20px;
    }

    .website i {
        font-size: 20px !important;
    }

    .website h4 {
        font-size: 20px !important;
    }

    div.tooltip {
        top: 0px !important;
    }
</style>

<style type="text/css">
    .button-outline {
        background: #fff;
        border: .5px dashed #ccc;
    }

    .button-outline:hover {
        border: 1px dashed #6777EF !important;
        cursor: pointer;
    }

    .multi_layout {
        margin: 0;
        background: #fff
    }

    .multi_layout .card {
        margin-bottom: 0;
        border-radius: 0;
    }

    /*.multi_layout p, .multi_layout ul:not(.list-unstyled), .multi_layout ol{line-height: 15px;margin-top: 15px}*/
    .multi_layout .list-group li {
        padding: 15px 10px 12px 25px;
    }

    .multi_layout {
        border: .5px solid #dee2e6;
    }

    .multi_layout .collef, .multi_layout .colmid, .multi_layout .colrig {
        padding-left: 0px;
        padding-right: 0px;
    }

    .multi_layout .collef, .multi_layout .colmid {
        border-right: .5px solid #dee2e6;
    }

    .multi_layout .main_card {
        box-shadow: none;
    }

    /*.multi_layout .collef .makeScroll{max-height: 500px;overflow:auto;}*/
    /*.multi_layout .colrig .makeScroll{max-height:750px;overflow:auto;}*/
    .multi_layout .list-group {
        padding-top: 6px;
    }

    .multi_layout .list-group .list-group-item {
        border-radius: 0;
        border: .5px solid #dee2e6;
        border-left: none;
        border-right: none;
        cursor: pointer;
        z-index: 0;
        padding: 21px;
    }

    .multi_layout .list-group .list-group-item:first-child {
        border-top: none;
    }

    .multi_layout .list-group .list-group-item:last-child {
        border-bottom: none;
    }

    .multi_layout .list-group .list-group-item.active {
        border: .5px solid #6777EF;
    }

    .multi_layout .mCSB_inside > .mCSB_container {
        margin-right: 0;
    }

    .multi_layout .card-statistic-1 {
        border-radius: 0;
    }

    .multi_layout h6.page_name {
        font-size: 14px;
        margin: 10px 0;
    }

    .multi_layout .card .card-header input {
        max-width: 100% !important;
    }

    .multi_layout .card .card-header h4 a {
        font-weight: 700 !important;
    }

    .product-item .product-name {
        font-weight: 500;
    }

    .badge-status {
        border-color: #eee;
    }

    /* #right_column_title i{font-size: 17px;} */
    #cart_activities {
        height: 710px;
        overflow: auto;
    }

    #right_column_bottom_content .shadow-none .card-header, #right_column_bottom_content .shadow-none .card-body {
        padding: 20px 0;
    }

    /*.multi_layout .card-statistic-1 .card-icon{border: .5px solid #dee2e6;}*/
    .multi_layout .card.card-statistic-1 .card-icon, .card.card-statistic-2 .card-icon {
        margin: 0;
        border-radius: 4px 0 0 4px;
        background: transparent;
    }

    .multi_layout .card-statistic-1 {
        border: .5px solid #dee2e6;
        border-radius: 4px;
        margin-bottom: 5px;
    }

    .multi_layout .card.card-statistic-1 .card-header, .multi_layout .card.card-statistic-2 .card-header {
        padding: 0;
        padding-top: 20px;
    }

    .multi_layout .card.card-statistic-1 .card-body, .multi_layout .card.card-statistic-2 .card-body {
        padding: 0;
    }

    #store_list_field .select2{max-width:75%;}

    /*#right_column_bottom_content div[class^='col'], #right_column_bottom_content  div[class*=' col']{padding-left: 5px;padding-right: 5px;}*/

</style>

<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Ecommerce store</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="https://app.socialnowa.io/dashboard"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Ecommerce store</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-6">

    </div>

    <div class="pl-md-2 col-sm-12 col-md-6 d-flex">

        <a href="https://app.socialnowa.io/ecommerce/add_store" class="btn btn-primary mb-1 iframed" title="" data-toggle="tooltip" data-original-title="Create store">
            <i class="bx bx-plus-circle"></i> Create store        </a>

        <button id="notification_sound" data-active="false" class="btn btn-primary mb-1 ml-1" title="" data-toggle="tooltip" data-original-title="Notification new order sound">
            <i class="bx bxs-bell-off"></i>
        </button>

        <button id="notification_sound_loop" data-active="false" class="btn btn-primary mb-1 ml-1" title="" data-toggle="tooltip" data-original-title="Sound loop">
            <i class="bx bx-repeat"></i>
        </button>

    </div>



</div>

<div class="section-body">



            <div class="card text-center" id="nodata">
            <div class="card-body">
                <div class="mt-3">
                    <iframe src="" frameborder="0" style="display: none; overflow: hidden; min-height: 700px;" width="100%" id="iFrameResizer0" scrolling="no"></iframe>
                </div>
                <div class="empty-state hide_in_iframe">
                    <img class="img-fluid" style="height: 200px" src="https://app.socialnowa.io/assets/img/drawkit/drawkit-nature-man-colour.svg" alt="image">
                    <h2 class="mt-0">We could not find any ecommerce store.</h2>
                    <p class="lead">You have to create a store first.</p>
                    <a href="https://app.socialnowa.io/ecommerce/add_store" title="" data-toggle="tooltip" class="btn btn-primary iframed" data-original-title="Create store"><i class="bx bx-right-arrow-circle"></i> Create store                    </a>
                </div>
            </div>
        </div>


</div>


<div class="modal fade" id="webhook_data" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i class="bx-task"></i> Activity</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bx bx-time"></i> <span class="align-middle ml-25">Close</span></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="reminder_data" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i class="bx bx-bell"></i> Reminder report                </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body data-card">
                <div class="table-responsive2">
                    <table class="table table-bordered" id="mytable2">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th style="vertical-align:middle;width:20px">
                                <input class="regular-checkbox" id="datatableSelectAllRows" type="checkbox"><label for="datatableSelectAllRows"></label>
                            </th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Subscriber id</th>
                            <th>Reminder hour</th>
                            <th>Sent at</th>
                            <th>API response</th>
                            <th>Order</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bx bx-time"></i> <span class="align-middle ml-25">Close</span></button>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
