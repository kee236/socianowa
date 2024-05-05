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
                    <fieldset class="form-group" id="store_list_field">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="store_list_select">Store</label>
                    </div>
                    <select class="form-control select2 select2-icons select2-hidden-accessible" id="store_list_select" tabindex="-1" aria-hidden="true" data-select2-id="store_list_select">

                                                    <option data-icon="bx bx-store" value="198" selected="" data-select2-id="6">Davtevh studio</option>

                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-store_list_select-container"><span class="select2-selection__rendered" id="select2-store_list_select-container" role="textbox" aria-readonly="true" title="Davtevh studio"><i class="bx bx-store"></i>Davtevh studio</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </fieldset>

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

            <div class="card hide_row_iframed">
            <div class="card-body">
                <div class="row">


                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                        <div class="breadcrumb-item">
                            <form method="POST" action="https://app.socialnowa.io/ecommerce/store_list">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="bx bx-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="hidden" name="store_id" id="store_id">
                                    <input type="text" class="form-control datepicker_x" value="2024-04-06 00:00:00" id="from_date" name="from_date" style="width:115px">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            -
                                        </div>
                                    </div>
                                    <input type="text" class="form-control datepicker_x" value="2024-05-06 23:59:59" id="to_date" name="to_date" style="width:115px">
                                    <select name="currency" id="currency" class="select2 form-control select2-hidden-accessible" style="width: 85px;" data-select2-id="currency" tabindex="-1" aria-hidden="true">
                                        <option value="AED">AED</option><option value="AFN">AFN</option><option value="ALL">ALL</option><option value="AMD">AMD</option><option value="ANG">ANG</option><option value="AOA">AOA</option><option value="ARS">ARS</option><option value="AUD">AUD</option><option value="AWG">AWG</option><option value="AZN">AZN</option><option value="BAM">BAM</option><option value="BBD">BBD</option><option value="BDT">BDT</option><option value="BGN">BGN</option><option value="BHD">BHD</option><option value="BIF">BIF</option><option value="BMD">BMD</option><option value="BND">BND</option><option value="BOB">BOB</option><option value="BRL">BRL</option><option value="BSD">BSD</option><option value="BTN">BTN</option><option value="BWP">BWP</option><option value="BYR">BYR</option><option value="BZD">BZD</option><option value="CAD">CAD</option><option value="CDF">CDF</option><option value="CHF">CHF</option><option value="CLP">CLP</option><option value="CNY">CNY</option><option value="COP">COP</option><option value="CRC">CRC</option><option value="CUP">CUP</option><option value="CVE">CVE</option><option value="CYP">CYP</option><option value="CZK">CZK</option><option value="DJF">DJF</option><option value="DKK">DKK</option><option value="DOP">DOP</option><option value="DZD">DZD</option><option value="EEK">EEK</option><option value="EGP">EGP</option><option value="ERN">ERN</option><option value="ETB">ETB</option><option value="EUR">EUR</option><option value="FJD">FJD</option><option value="FKP">FKP</option><option value="GBP">GBP</option><option value="GEL">GEL</option><option value="GHC">GHC</option><option value="GIP">GIP</option><option value="GMD">GMD</option><option value="GNF">GNF</option><option value="GTQ">GTQ</option><option value="GYD">GYD</option><option value="HKD">HKD</option><option value="HNL">HNL</option><option value="HRK">HRK</option><option value="HTG">HTG</option><option value="HUF">HUF</option><option value="IDR">IDR</option><option value="ILS">ILS</option><option value="INR">INR</option><option value="IQD">IQD</option><option value="IRR">IRR</option><option value="ISK">ISK</option><option value="JMD">JMD</option><option value="JOD">JOD</option><option value="JPY">JPY</option><option value="KES">KES</option><option value="KGS">KGS</option><option value="KHR">KHR</option><option value="KMF">KMF</option><option value="KPW">KPW</option><option value="KRW">KRW</option><option value="KWD">KWD</option><option value="KYD">KYD</option><option value="KZT">KZT</option><option value="LAK">LAK</option><option value="LBP">LBP</option><option value="LKR">LKR</option><option value="LRD">LRD</option><option value="LSL">LSL</option><option value="LTL">LTL</option><option value="LVL">LVL</option><option value="LYD">LYD</option><option value="MAD">MAD</option><option value="MDL">MDL</option><option value="MGA">MGA</option><option value="MKD">MKD</option><option value="MMK">MMK</option><option value="MNT">MNT</option><option value="MOP">MOP</option><option value="MRO">MRO</option><option value="MTL">MTL</option><option value="MUR">MUR</option><option value="MVR">MVR</option><option value="MWK">MWK</option><option value="MXN">MXN</option><option value="MYR">MYR</option><option value="MZN">MZN</option><option value="NAD">NAD</option><option value="NGN">NGN</option><option value="NIO">NIO</option><option value="NOK">NOK</option><option value="NPR">NPR</option><option value="NZD">NZD</option><option value="OMR">OMR</option><option value="PAB">PAB</option><option value="PEN">PEN</option><option value="PGK">PGK</option><option value="PHP">PHP</option><option value="PKR">PKR</option><option value="PLN">PLN</option><option value="PYG">PYG</option><option value="QAR">QAR</option><option value="RON">RON</option><option value="RSD">RSD</option><option value="RUB">RUB</option><option value="RWF">RWF</option><option value="SAR">SAR</option><option value="SBD">SBD</option><option value="SCR">SCR</option><option value="SDD">SDD</option><option value="SEK">SEK</option><option value="SGD">SGD</option><option value="SHP">SHP</option><option value="SKK">SKK</option><option value="SLL">SLL</option><option value="SOS">SOS</option><option value="SRD">SRD</option><option value="STD">STD</option><option value="SVC">SVC</option><option value="SYP">SYP</option><option value="SZL">SZL</option><option value="THB">THB</option><option value="TJS">TJS</option><option value="TMM">TMM</option><option value="TND">TND</option><option value="TOP">TOP</option><option value="TRY">TRY</option><option value="TTD">TTD</option><option value="TWD">TWD</option><option value="TZS">TZS</option><option value="UAH">UAH</option><option value="UGX">UGX</option><option value="USD" selected="selected" data-select2-id="4">USD</option><option value="UYU">UYU</option><option value="UZS">UZS</option><option value="VEF">VEF</option><option value="VND">VND</option><option value="VUV">VUV</option><option value="WST">WST</option><option value="XAF">XAF</option><option value="XCD">XCD</option><option value="XOF">XOF</option><option value="XPF">XPF</option><option value="YER">YER</option><option value="ZAR">ZAR</option><option value="ZMK">ZMK</option><option value="ZWD">ZWD</option>                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 85px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-currency-container"><span class="select2-selection__rendered" id="select2-currency-container" role="textbox" aria-readonly="true" title="USD">USD</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <button class="btn btn-outline-primary" style="margin-left:1px" id="search_submit" type="submit"><i class="bx bx-search"></i> Search                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>


            <div class="row multi_layout">



            <div class="col-md-3 col-lg-2 collef d-none d-lg-block" style="border:.5px solid #dee2e6;">
                <div class="card main_card">
                    <div class="card-header">
                        <h4><i class="bx bx-paper-plane"></i> Actions</h4>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column settings_menu" style="margin-top: 20px;">
                             <li class="nav-item p-0 m-0"><a data-original-title="Dashboard" href="https://app.socialnowa.io/ecommerce" class="no_radius nav-link  active"><i class="bx bx-bar-chart-alt align-middle"></i> <span class="align-middle">Dashboard</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Orders" href="https://app.socialnowa.io/ecommerce/order_list" class="no_radius nav-link iframed "><i class="bx bx-cart align-middle"></i> <span class="align-middle">Orders</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Store settings" href="https://app.socialnowa.io/ecommerce/edit_store/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bxs-cog align-middle"></i> <span class="align-middle">Store settings</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Checkout settings" href="https://app.socialnowa.io/ecommerce/payment_accounts/198" class="no_radius nav-link iframed "><i class="bx bx-credit-card-alt align-middle"></i> <span class="align-middle">Checkout settings</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Business hour settings" href="https://app.socialnowa.io/ecommerce/business_hour_settings" class="no_radius nav-link iframed "><i class="bx bx-calendar-check align-middle"></i> <span class="align-middle">Business hour settings</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Marketing" href="https://app.socialnowa.io/n_theme/ecommerce_codes/" class="no_radius nav-link iframed "><i class="bx bx-target-lock align-middle"></i> <span class="align-middle">Marketing</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Ecommerce builder" href="https://app.socialnowa.io/ecommerce_builder/42881713346719" class="no_radius nav-link  " target="_BLANK"><i class="bx bx-link-external align-middle"></i> <span class="align-middle">Ecommerce builder</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Ecommerce custom domain" href="https://app.socialnowa.io/n_theme/custom_domain/" class="no_radius nav-link iframed "><i class="bx bx-link-external align-middle"></i> <span class="align-middle">Ecommerce custom domain</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Categories" href="https://app.socialnowa.io/ecommerce/category_list" class="no_radius nav-link iframed "><i class="bx bx-columns align-middle"></i> <span class="align-middle">Categories</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Attributes" href="https://app.socialnowa.io/ecommerce/attribute_list" class="no_radius nav-link iframed "><i class="bx bx-palette align-middle"></i> <span class="align-middle">Attributes</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Products" href="https://app.socialnowa.io/ecommerce/product_list" class="no_radius nav-link iframed "><i class="bx bx-box align-middle"></i> <span class="align-middle">Products</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Visit store" href="https://app.socialnowa.io/ecommerce/store/42881713346719" class="no_radius nav-link  " target="_BLANK"><i class="bx bx-news align-middle"></i> <span class="align-middle">Visit store</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Delivery points" href="https://app.socialnowa.io/ecommerce/pickup_point_list" class="no_radius nav-link iframed "><i class="bx bx-map align-middle"></i> <span class="align-middle">Delivery points</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="QR menu" href="https://app.socialnowa.io/ecommerce/qr_code/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bx-barcode align-middle"></i> <span class="align-middle">QR menu</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Coupons" href="https://app.socialnowa.io/ecommerce/coupon_list" class="no_radius nav-link iframed "><i class="bx bx-gift align-middle"></i> <span class="align-middle">Coupons</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Signed-up customers" href="https://app.socialnowa.io/ecommerce/customer_list" class="no_radius nav-link iframed "><i class="bx bx-group align-middle"></i> <span class="align-middle">Signed-up customers</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Copy URL" href="https://app.socialnowa.io/ecommerce/copy_url/198" class="no_radius nav-link iframed "><i class="bx bx-copy align-middle"></i> <span class="align-middle">Copy URL</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Order status notification" href="https://app.socialnowa.io/ecommerce/notification_settings/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bx-bell align-middle"></i> <span class="align-middle">Order status notification</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Confirmation &amp; reminder" href="https://app.socialnowa.io/ecommerce/reminder_settings/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bxs-volume align-middle"></i> <span class="align-middle">Confirmation &amp; reminder</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Reminder report" href="" class="no_radius nav-link reminder_report " campaign_id="198"><i class="bx bx-bullseye align-middle"></i> <span class="align-middle">Reminder report</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Delivery Methods" href="https://app.socialnowa.io/custom_cname/delivery_methods_list/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bxs-package align-middle"></i> <span class="align-middle">Delivery Methods</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Shipping zones" href="https://app.socialnowa.io/custom_cname/shipping_zone_list/198" class="no_radius nav-link iframed " campaign_id="198"><i class="bx bxs-package align-middle"></i> <span class="align-middle">Shipping zones</span></a></li> <li class="nav-item p-0 m-0"><a data-original-title="Delete store" href="#" class="no_radius nav-link delete_campaign " campaign_id="198"><i class="bx bx-trash-alt align-middle"></i> <span class="align-middle">Delete store</span></a></li>                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-12 col-lg-10 colrig" id="right_column">

                <div class="card main_card">
                    <div class="card-header">



                        <div class="col-sm-12 col-md-8 p-0 mb-1">
                            <h4 id="right_column_title" class="card-title font-medium-2"><i class="bx bx-bar-chart-alt"></i>

                                <a title="" data-toggle="tooltip" target="_BLANK" href="https://app.socialnowa.io/ecommerce/store/42881713346719" data-original-title="Visit store">Davtevh studio</a>
                                (No page                                                                ) <span id="iframe_title"> : Dashboard</span></h4>
                        </div>
                        <div class="col-sm-12 col-md-4 p-0 mb-1 d-lg-none">
                            <div class="card-header-action dropleft float-right">
                                <a href="#" data-toggle="dropdown" class="btn btn-outline-primary dropdown-toggle">Actions</a>
                                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <li><a data-original-title="Dashboard" class="dropdown-item " href="https://app.socialnowa.io/ecommerce"><i class="bx bx-bar-chart-alt"></i> &nbsp; Dashboard</a></li><li><a data-original-title="Orders" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/order_list"><i class="bx bx-cart"></i> &nbsp; Orders</a></li><li><a data-original-title="Store settings" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/edit_store/198" campaign_id="198"><i class="bx bxs-cog"></i> &nbsp; Store settings</a></li><li><a data-original-title="Checkout settings" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/payment_accounts/198"><i class="bx bx-credit-card-alt"></i> &nbsp; Checkout settings</a></li><li><a data-original-title="Business hour settings" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/business_hour_settings"><i class="bx bx-calendar-check"></i> &nbsp; Business hour settings</a></li><li><a data-original-title="Marketing" class="dropdown-item iframed" href="https://app.socialnowa.io/n_theme/ecommerce_codes/"><i class="bx bx-target-lock"></i> &nbsp; Marketing</a></li><li><a data-original-title="Ecommerce builder" class="dropdown-item " href="https://app.socialnowa.io/ecommerce_builder/42881713346719" target="_BLANK"><i class="bx bx-link-external"></i> &nbsp; Ecommerce builder</a></li><li><a data-original-title="Ecommerce custom domain" class="dropdown-item iframed" href="https://app.socialnowa.io/n_theme/custom_domain/"><i class="bx bx-link-external"></i> &nbsp; Ecommerce custom domain</a></li><li><a data-original-title="Categories" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/category_list"><i class="bx bx-columns"></i> &nbsp; Categories</a></li><li><a data-original-title="Attributes" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/attribute_list"><i class="bx bx-palette"></i> &nbsp; Attributes</a></li><li><a data-original-title="Products" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/product_list"><i class="bx bx-box"></i> &nbsp; Products</a></li><li><a data-original-title="Visit store" class="dropdown-item " href="https://app.socialnowa.io/ecommerce/store/42881713346719" target="_BLANK"><i class="bx bx-news"></i> &nbsp; Visit store</a></li><li><a data-original-title="Delivery points" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/pickup_point_list"><i class="bx bx-map"></i> &nbsp; Delivery points</a></li><li><a data-original-title="QR menu" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/qr_code/198" campaign_id="198"><i class="bx bx-barcode"></i> &nbsp; QR menu</a></li><li><a data-original-title="Coupons" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/coupon_list"><i class="bx bx-gift"></i> &nbsp; Coupons</a></li><li><a data-original-title="Signed-up customers" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/customer_list"><i class="bx bx-group"></i> &nbsp; Signed-up customers</a></li><li><a data-original-title="Copy URL" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/copy_url/198"><i class="bx bx-copy"></i> &nbsp; Copy URL</a></li><li><a data-original-title="Order status notification" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/notification_settings/198" campaign_id="198"><i class="bx bx-bell"></i> &nbsp; Order status notification</a></li><li><a data-original-title="Confirmation &amp; reminder" class="dropdown-item iframed" href="https://app.socialnowa.io/ecommerce/reminder_settings/198" campaign_id="198"><i class="bx bxs-volume"></i> &nbsp; Confirmation &amp; reminder</a></li><li><a data-original-title="Reminder report" class="dropdown-item reminder_report" href="campaign_id=198"><i class="bx bx-bullseye"></i> &nbsp; Reminder report</a></li><li><a data-original-title="Delivery Methods" class="dropdown-item iframed" href="https://app.socialnowa.io/custom_cname/delivery_methods_list/198" campaign_id="198"><i class="bx bxs-package"></i> &nbsp; Delivery Methods</a></li><li><a data-original-title="Shipping zones" class="dropdown-item iframed" href="https://app.socialnowa.io/custom_cname/shipping_zone_list/198" campaign_id="198"><i class="bx bxs-package"></i> &nbsp; Shipping zones</a></li><li><a data-original-title="Delete store" class="dropdown-item delete_campaign" href="#" campaign_id="198"><i class="bx bx-trash-alt"></i> &nbsp; Delete store</a></li>                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <iframe src="" frameborder="0" style="display: none; overflow: hidden; min-height: 700px;" width="100%" id="iFrameResizer0" scrolling="no"></iframe>
                        <div class="row hide_in_iframe mt-1">
                            <div class="col-12">

                                <div id="right_column_content">

                                    <div id="right_column_bottom_content">


                                        <div class="row">

                                            <div class="col-sm-3 col-12 dashboard-users-success">
                                                <div class="card card-statistic-1 p-1">


                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">
                                                            <i class="bx bx-dollar font-medium-5 align-middle"></i>
                                                            <span class="align-middle text-uppercase text-bold-600">Today</span>
                                                        </h5>
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span class="font-medium-2 mr-50 text-bold-600">$0</span>
                                                                <span class="text-success">(100%)</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">NET SALES: $0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted text-uppercase">Orders: 0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">RECOVERED CARTS: 0</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-12 dashboard-users-success">
                                                <div class="card card-statistic-1 p-1">


                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">
                                                            <i class="bx bx-dollar font-medium-5 align-middle"></i>
                                                            <span class="align-middle text-uppercase text-bold-600">Month</span>
                                                        </h5>
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span class="font-medium-2 mr-50 text-bold-600 ">$0</span>
                                                                <span class="text-success">(100%)</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted">NET SALES: $0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted text-uppercase">Orders: 0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted text-uppercase">RECOVERED CARTS: 0</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-12 dashboard-users-success">
                                                <div class="card card-statistic-1 p-1">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center ">
                                                            <i class="bx bx-dollar font-medium-5 align-middle"></i>
                                                            <span class="align-middle text-uppercase text-bold-600">Year</span>
                                                        </h5>
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span class="font-medium-2 mr-50 text-bold-600">$0</span>
                                                                <span class="text-success">(100%)</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">NET SALES: $0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted text-uppercase">Orders: 0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">RECOVERED CARTS: 0</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-12 dashboard-users-success">
                                                <div class="card card-statistic-1 p-1">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center ">
                                                            <i class="bx bx-dollar font-medium-5 align-middle"></i>
                                                            <span class="align-middle text-uppercase text-bold-600">Selected Period</span>
                                                        </h5>
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span class="font-medium-2 mr-50 text-bold-600">$0</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">NET SALES: $0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-muted text-uppercase">Orders: 0</small>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i class="bx bx-radio-circle font-small-1 text-success mr-25"></i>
                                                                <small class="text-uppercase text-muted">RECOVERED CARTS: 0</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div id="chart_new" class="mt-4 col-12" style="min-height: 415px;"><div id="apexchartsxf3h3qps" class="apexcharts-canvas apexchartsxf3h3qps apexcharts-theme-light" style="width: 699px; height: 400px;"><svg id="SvgjsSvg1006" width="699" height="400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="699" height="400"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 200px;"><div class="apexcharts-legend-series" rel="1" seriesname="Grossxsales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(90, 141, 238) !important; color: rgb(90, 141, 238); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Gross%20sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Gross sales</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Netxsales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(253, 172, 65) !important; color: rgb(253, 172, 65); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Net%20sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Net sales</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Averagexthisxyear" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 91, 92) !important; color: rgb(255, 91, 92); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Average%20this%20year" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Average this year</span></div><div class="apexcharts-legend-series" rel="4" seriesname="Averagexlastxyear" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(57, 218, 138) !important; color: rgb(57, 218, 138); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Average%20last%20year" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Average last year</span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(40.75, 30)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskxf3h3qps"><rect id="SvgjsRect1016" width="654.75" height="258.5162629140218" x="-3.25" y="-1.25" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxf3h3qps"></clipPath><clipPath id="nonForecastMaskxf3h3qps"></clipPath><clipPath id="gridRectMarkerMaskxf3h3qps"><rect id="SvgjsRect1017" width="652.25" height="260.0162629140218" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1015" x1="604.5333333333333" y1="0" x2="604.5333333333333" y2="256.0162629140218" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="604.5333333333333" y="0" width="1" height="256.0162629140218" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1038" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1039" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1041" font-family="IBM Plex Sans" x="0" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 1 273.6162657737732)"><tspan id="SvgjsTspan1042">2024-04-06</tspan><title>2024-04-06</title></text><text id="SvgjsText1044" font-family="IBM Plex Sans" x="21.608333333333334" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 22.608330726623535 273.6162657737732)"><tspan id="SvgjsTspan1045">2024-04-07</tspan><title>2024-04-07</title></text><text id="SvgjsText1047" font-family="IBM Plex Sans" x="43.21666666666667" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 44.21666240692139 273.6162657737732)"><tspan id="SvgjsTspan1048">2024-04-08</tspan><title>2024-04-08</title></text><text id="SvgjsText1050" font-family="IBM Plex Sans" x="64.82499999999999" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 65.82500076293945 273.6162657737732)"><tspan id="SvgjsTspan1051">2024-04-09</tspan><title>2024-04-09</title></text><text id="SvgjsText1053" font-family="IBM Plex Sans" x="86.43333333333334" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 87.4333381652832 273.6162657737732)"><tspan id="SvgjsTspan1054">2024-04-10</tspan><title>2024-04-10</title></text><text id="SvgjsText1056" font-family="IBM Plex Sans" x="108.04166666666666" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 109.04166412353516 273.6162657737732)"><tspan id="SvgjsTspan1057">2024-04-11</tspan><title>2024-04-11</title></text><text id="SvgjsText1059" font-family="IBM Plex Sans" x="129.64999999999998" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 130.6500015258789 273.6162657737732)"><tspan id="SvgjsTspan1060">2024-04-12</tspan><title>2024-04-12</title></text><text id="SvgjsText1062" font-family="IBM Plex Sans" x="151.25833333333333" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 152.2583236694336 273.6162657737732)"><tspan id="SvgjsTspan1063">2024-04-13</tspan><title>2024-04-13</title></text><text id="SvgjsText1065" font-family="IBM Plex Sans" x="172.86666666666667" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 173.86668395996094 273.6162657737732)"><tspan id="SvgjsTspan1066">2024-04-14</tspan><title>2024-04-14</title></text><text id="SvgjsText1068" font-family="IBM Plex Sans" x="194.47500000000002" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 195.47500610351562 273.6162657737732)"><tspan id="SvgjsTspan1069">2024-04-15</tspan><title>2024-04-15</title></text><text id="SvgjsText1071" font-family="IBM Plex Sans" x="216.08333333333337" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 217.0833282470703 273.6162657737732)"><tspan id="SvgjsTspan1072">2024-04-16</tspan><title>2024-04-16</title></text><text id="SvgjsText1074" font-family="IBM Plex Sans" x="237.69166666666672" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 238.69168090820312 273.6162657737732)"><tspan id="SvgjsTspan1075">2024-04-17</tspan><title>2024-04-17</title></text><text id="SvgjsText1077" font-family="IBM Plex Sans" x="259.30000000000007" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 260.3000030517578 273.6162657737732)"><tspan id="SvgjsTspan1078">2024-04-18</tspan><title>2024-04-18</title></text><text id="SvgjsText1080" font-family="IBM Plex Sans" x="280.9083333333334" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 281.9083251953125 273.6162657737732)"><tspan id="SvgjsTspan1081">2024-04-19</tspan><title>2024-04-19</title></text><text id="SvgjsText1083" font-family="IBM Plex Sans" x="302.51666666666677" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 303.51666259765625 273.6162657737732)"><tspan id="SvgjsTspan1084">2024-04-20</tspan><title>2024-04-20</title></text><text id="SvgjsText1086" font-family="IBM Plex Sans" x="324.1250000000001" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 325.125 273.6162657737732)"><tspan id="SvgjsTspan1087">2024-04-21</tspan><title>2024-04-21</title></text><text id="SvgjsText1089" font-family="IBM Plex Sans" x="345.73333333333346" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 346.7333679199219 273.6162657737732)"><tspan id="SvgjsTspan1090">2024-04-22</tspan><title>2024-04-22</title></text><text id="SvgjsText1092" font-family="IBM Plex Sans" x="367.3416666666668" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 368.3416442871094 273.6162657737732)"><tspan id="SvgjsTspan1093">2024-04-23</tspan><title>2024-04-23</title></text><text id="SvgjsText1095" font-family="IBM Plex Sans" x="388.95000000000016" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 389.95001220703125 273.6162657737732)"><tspan id="SvgjsTspan1096">2024-04-24</tspan><title>2024-04-24</title></text><text id="SvgjsText1098" font-family="IBM Plex Sans" x="410.5583333333335" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 411.5583190917969 273.6162657737732)"><tspan id="SvgjsTspan1099">2024-04-25</tspan><title>2024-04-25</title></text><text id="SvgjsText1101" font-family="IBM Plex Sans" x="432.16666666666686" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 433.1666564941406 273.6162657737732)"><tspan id="SvgjsTspan1102">2024-04-26</tspan><title>2024-04-26</title></text><text id="SvgjsText1104" font-family="IBM Plex Sans" x="453.7750000000002" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 454.7749938964844 273.6162657737732)"><tspan id="SvgjsTspan1105">2024-04-27</tspan><title>2024-04-27</title></text><text id="SvgjsText1107" font-family="IBM Plex Sans" x="475.38333333333355" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 476.38336181640625 273.6162657737732)"><tspan id="SvgjsTspan1108">2024-04-28</tspan><title>2024-04-28</title></text><text id="SvgjsText1110" font-family="IBM Plex Sans" x="496.9916666666669" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 497.9916687011719 273.6162657737732)"><tspan id="SvgjsTspan1111">2024-04-29</tspan><title>2024-04-29</title></text><text id="SvgjsText1113" font-family="IBM Plex Sans" x="518.6000000000003" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 519.6000061035156 273.6162657737732)"><tspan id="SvgjsTspan1114">2024-04-30</tspan><title>2024-04-30</title></text><text id="SvgjsText1116" font-family="IBM Plex Sans" x="540.2083333333336" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 541.2083129882812 273.6162657737732)"><tspan id="SvgjsTspan1117">2024-05-01</tspan><title>2024-05-01</title></text><text id="SvgjsText1119" font-family="IBM Plex Sans" x="561.816666666667" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 562.816650390625 273.6162657737732)"><tspan id="SvgjsTspan1120">2024-05-02</tspan><title>2024-05-02</title></text><text id="SvgjsText1122" font-family="IBM Plex Sans" x="583.4250000000003" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 584.4249877929688 273.6162657737732)"><tspan id="SvgjsTspan1123">2024-05-03</tspan><title>2024-05-03</title></text><text id="SvgjsText1125" font-family="IBM Plex Sans" x="605.0333333333336" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 606.0333251953125 273.6162657737732)"><tspan id="SvgjsTspan1126">2024-05-04</tspan><title>2024-05-04</title></text><text id="SvgjsText1128" font-family="IBM Plex Sans" x="626.641666666667" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 627.6416625976562 273.6162657737732)"><tspan id="SvgjsTspan1129">2024-05-05</tspan><title>2024-05-05</title></text><text id="SvgjsText1131" font-family="IBM Plex Sans" x="648.2500000000003" y="279.0162629140218" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;" transform="rotate(-45 649.25 273.6162657737732)"><tspan id="SvgjsTspan1132">2024-05-06</tspan><title>2024-05-06</title></text></g></g><g id="SvgjsG1155" class="apexcharts-grid"><g id="SvgjsG1156" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1158" x1="0" y1="0" x2="648.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1159" x1="0" y1="51.20325258280436" x2="648.25" y2="51.20325258280436" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1160" x1="0" y1="102.40650516560872" x2="648.25" y2="102.40650516560872" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1161" x1="0" y1="153.60975774841307" x2="648.25" y2="153.60975774841307" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1162" x1="0" y1="204.81301033121744" x2="648.25" y2="204.81301033121744" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1163" x1="0" y1="256.0162629140218" x2="648.25" y2="256.0162629140218" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1157" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1165" x1="0" y1="256.0162629140218" x2="648.25" y2="256.0162629140218" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1164" x1="0" y1="1" x2="0" y2="256.0162629140218" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1018" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1019" class="apexcharts-series" seriesName="Grossxsales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1022" d="M0 256.0162629140218L0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218M648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="rgba(90,141,238,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218L 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C 648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218M 648.25 256.0162629140218z" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><path id="SvgjsPath1023" d="M0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="none" fill-opacity="1" stroke="rgba(90,141,238,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><g id="SvgjsG1020" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1171" r="0" cx="605.0333333333333" cy="256.0162629140218" class="apexcharts-marker wn2vrc46nf" stroke="#ffffff" fill="#5a8dee" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-series" seriesName="Netxsales" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1027" d="M0 256.0162629140218L0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218M648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="rgba(253,172,65,0.25)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="8" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218L 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C 648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218M 648.25 256.0162629140218z" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><path id="SvgjsPath1028" d="M0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="none" fill-opacity="1" stroke="rgba(253,172,65,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="8" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><g id="SvgjsG1025" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1172" r="0" cx="605.0333333333333" cy="256.0162629140218" class="apexcharts-marker wq3985r3a" stroke="#ffffff" fill="#fdac41" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g></g><g id="SvgjsG1029" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1030" class="apexcharts-series" seriesName="Averagexthisxyear" data:longestSeries="true" rel="1" data:realIndex="2"><path id="SvgjsPath1033" d="M0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="none" fill-opacity="1" stroke="rgba(255,91,92,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-line" index="2" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><g id="SvgjsG1031" class="apexcharts-series-markers-wrap" data:realIndex="2"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1173" r="0" cx="605.0333333333333" cy="256.0162629140218" class="apexcharts-marker w872921d3" stroke="#ffffff" fill="#ff5b5c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1034" class="apexcharts-series" seriesName="Averagexlastxyear" data:longestSeries="true" rel="2" data:realIndex="3"><path id="SvgjsPath1037" d="M0 256.0162629140218C7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218C648.25 256.0162629140218 648.25 256.0162629140218 648.25 256.0162629140218 " fill="none" fill-opacity="1" stroke="rgba(57,218,138,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-line" index="3" clip-path="url(#gridRectMaskxf3h3qps)" pathTo="M 0 256.0162629140218C 7.562916666666666 256.0162629140218 14.045416666666668 256.0162629140218 21.608333333333334 256.0162629140218C 29.17125 256.0162629140218 35.65375 256.0162629140218 43.21666666666667 256.0162629140218C 50.779583333333335 256.0162629140218 57.26208333333334 256.0162629140218 64.825 256.0162629140218C 72.38791666666667 256.0162629140218 78.87041666666667 256.0162629140218 86.43333333333334 256.0162629140218C 93.99625 256.0162629140218 100.47875 256.0162629140218 108.04166666666667 256.0162629140218C 115.60458333333334 256.0162629140218 122.08708333333334 256.0162629140218 129.65 256.0162629140218C 137.21291666666667 256.0162629140218 143.69541666666666 256.0162629140218 151.25833333333333 256.0162629140218C 158.82125 256.0162629140218 165.30375 256.0162629140218 172.86666666666667 256.0162629140218C 180.42958333333334 256.0162629140218 186.91208333333333 256.0162629140218 194.475 256.0162629140218C 202.03791666666666 256.0162629140218 208.52041666666668 256.0162629140218 216.08333333333334 256.0162629140218C 223.64625 256.0162629140218 230.12875 256.0162629140218 237.69166666666666 256.0162629140218C 245.25458333333333 256.0162629140218 251.73708333333335 256.0162629140218 259.3 256.0162629140218C 266.86291666666665 256.0162629140218 273.34541666666667 256.0162629140218 280.9083333333333 256.0162629140218C 288.47125 256.0162629140218 294.95374999999996 256.0162629140218 302.51666666666665 256.0162629140218C 310.07958333333335 256.0162629140218 316.5620833333333 256.0162629140218 324.125 256.0162629140218C 331.6879166666667 256.0162629140218 338.17041666666665 256.0162629140218 345.73333333333335 256.0162629140218C 353.29625 256.0162629140218 359.77875 256.0162629140218 367.34166666666664 256.0162629140218C 374.90458333333333 256.0162629140218 381.3870833333333 256.0162629140218 388.95 256.0162629140218C 396.5129166666667 256.0162629140218 402.99541666666664 256.0162629140218 410.55833333333334 256.0162629140218C 418.12125000000003 256.0162629140218 424.60375 256.0162629140218 432.1666666666667 256.0162629140218C 439.7295833333333 256.0162629140218 446.21208333333334 256.0162629140218 453.775 256.0162629140218C 461.3379166666667 256.0162629140218 467.82041666666663 256.0162629140218 475.3833333333333 256.0162629140218C 482.94625 256.0162629140218 489.42875 256.0162629140218 496.9916666666667 256.0162629140218C 504.55458333333337 256.0162629140218 511.0370833333333 256.0162629140218 518.6 256.0162629140218C 526.1629166666667 256.0162629140218 532.6454166666667 256.0162629140218 540.2083333333334 256.0162629140218C 547.77125 256.0162629140218 554.25375 256.0162629140218 561.8166666666666 256.0162629140218C 569.3795833333332 256.0162629140218 575.8620833333333 256.0162629140218 583.425 256.0162629140218C 590.9879166666666 256.0162629140218 597.4704166666667 256.0162629140218 605.0333333333333 256.0162629140218C 612.5962499999999 256.0162629140218 619.07875 256.0162629140218 626.6416666666667 256.0162629140218C 634.2045833333333 256.0162629140218 640.6870833333334 256.0162629140218 648.25 256.0162629140218" pathFrom="M -1 256.0162629140218L -1 256.0162629140218L 21.608333333333334 256.0162629140218L 43.21666666666667 256.0162629140218L 64.825 256.0162629140218L 86.43333333333334 256.0162629140218L 108.04166666666667 256.0162629140218L 129.65 256.0162629140218L 151.25833333333333 256.0162629140218L 172.86666666666667 256.0162629140218L 194.475 256.0162629140218L 216.08333333333334 256.0162629140218L 237.69166666666666 256.0162629140218L 259.3 256.0162629140218L 280.9083333333333 256.0162629140218L 302.51666666666665 256.0162629140218L 324.125 256.0162629140218L 345.73333333333335 256.0162629140218L 367.34166666666664 256.0162629140218L 388.95 256.0162629140218L 410.55833333333334 256.0162629140218L 432.1666666666667 256.0162629140218L 453.775 256.0162629140218L 475.3833333333333 256.0162629140218L 496.9916666666667 256.0162629140218L 518.6 256.0162629140218L 540.2083333333334 256.0162629140218L 561.8166666666666 256.0162629140218L 583.425 256.0162629140218L 605.0333333333333 256.0162629140218L 626.6416666666667 256.0162629140218L 648.25 256.0162629140218"></path><g id="SvgjsG1035" class="apexcharts-series-markers-wrap" data:realIndex="3"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1174" r="0" cx="605.0333333333333" cy="256.0162629140218" class="apexcharts-marker wjld4rw9p" stroke="#ffffff" fill="#39da8a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1021" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1026" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1032" class="apexcharts-datalabels" data:realIndex="2"></g><g id="SvgjsG1036" class="apexcharts-datalabels" data:realIndex="3"></g></g><line id="SvgjsLine1166" x1="0" y1="0" x2="648.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1167" x1="0" y1="0" x2="648.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1168" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1169" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1170" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1175" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1176" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1014" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1133" class="apexcharts-yaxis" rel="0" transform="translate(10.75, 0)"><g id="SvgjsG1134" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1136" font-family="IBM Plex Sans" x="20" y="24.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1137">5</tspan><title>5</title></text><text id="SvgjsText1139" font-family="IBM Plex Sans" x="20" y="75.70325258280437" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1140">4</tspan><title>4</title></text><text id="SvgjsText1142" font-family="IBM Plex Sans" x="20" y="126.90650516560873" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1143">3</tspan><title>3</title></text><text id="SvgjsText1145" font-family="IBM Plex Sans" x="20" y="178.1097577484131" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1146">2</tspan><title>2</title></text><text id="SvgjsText1148" font-family="IBM Plex Sans" x="20" y="229.31301033121747" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1149">1</tspan><title>1</title></text><text id="SvgjsText1151" font-family="IBM Plex Sans" x="20" y="280.5162629140218" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#596778" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;IBM Plex Sans&quot;;"><tspan id="SvgjsTspan1152">0</tspan><title>0</title></text></g><g id="SvgjsG1153" class="apexcharts-yaxis-title"><text id="SvgjsText1154" font-family="Helvetica, Arial, sans-serif" x="22.158447742462158" y="158.0081314570109" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -1.6331043243408203 153.60813283920288)">Amount</text></g></g><g id="SvgjsG1009" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 472.358px; top: 123.616px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">2024-05-04</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(90, 141, 238);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Gross sales: </span><span class="apexcharts-tooltip-text-y-value">$ 0 </span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 172, 65);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Net sales: </span><span class="apexcharts-tooltip-text-y-value">$ 0 </span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 91, 92);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Average this year: </span><span class="apexcharts-tooltip-text-y-value">$ 0 </span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 4; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(57, 218, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Average last year: </span><span class="apexcharts-tooltip-text-y-value">$ 0 </span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 603.04px; top: 288.016px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 57.8999px;">2024-05-04</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-zoomin-icon" title="Zoom In"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
</div><div class="apexcharts-zoomout-icon" title="Zoom Out"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
</div><div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
</svg></div><div class="apexcharts-pan-icon" title="Panning"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
    <defs>
        <path d="M0 0h24v24H0z" id="a"></path>
    </defs>
    <clipPath id="b">
        <use overflow="visible" xlink:href="#a"></use>
    </clipPath>
    <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
</svg></div><div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></div><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
                                        </div>



                                        <div class="row">

                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card shadow-none">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Top Selling Products</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0">
                                                                <thead>
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Order</th>
                                                                    <th>Total Value</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                                                                                </tbody>
                                                            </table>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>


                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card shadow-none">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Orders</h4>
                                                    </div>
                                                    <div id="order_type" class="card-body" style="min-height: 253.7px;"><div id="apexchartsfqttmtyj" class="apexcharts-canvas apexchartsfqttmtyj apexcharts-theme-light" style="width: 410px; height: 253.7px;"><svg id="SvgjsSvg1258" width="410" height="253.70000000000002" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="410" height="253.70000000000002"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 24px; right: 5px;"><div class="apexcharts-legend-series" rel="1" seriesname="Completed" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(90, 141, 238) !important; color: rgb(90, 141, 238); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Completed" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Completed</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Placed" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(253, 172, 65) !important; color: rgb(253, 172, 65); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Placed" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Placed</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Addedxtoxcart" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 91, 92) !important; color: rgb(255, 91, 92); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Added%20to%20cart" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Added to cart</span></div><div class="apexcharts-legend-series" rel="4" seriesname="Approved" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(57, 218, 138) !important; color: rgb(57, 218, 138); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Approved" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Approved</span></div><div class="apexcharts-legend-series" rel="5" seriesname="Rejected" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="5" data:collapsed="false" style="background: rgb(0, 207, 221) !important; color: rgb(0, 207, 221); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="5" i="4" data:default-text="Rejected" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Rejected</span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG1260" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1259"><clipPath id="gridRectMaskfqttmtyj"><rect id="SvgjsRect1262" width="257" height="322" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskfqttmtyj"></clipPath><clipPath id="nonForecastMaskfqttmtyj"></clipPath><clipPath id="gridRectMarkerMaskfqttmtyj"><rect id="SvgjsRect1263" width="255" height="324" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1264" class="apexcharts-pie"><g id="SvgjsG1265" transform="translate(0, 0) scale(1)"><g id="SvgjsG1266" class="apexcharts-slices"><g id="SvgjsG1267" class="apexcharts-series apexcharts-pie-series" seriesName="Completed" rel="1" data:realIndex="0"><path id="SvgjsPath1268" d="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" fill="rgba(90,141,238,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-0" index="0" j="0" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" stroke="#ffffff"></path></g><g id="SvgjsG1269" class="apexcharts-series apexcharts-pie-series" seriesName="Placed" rel="2" data:realIndex="1"><path id="SvgjsPath1270" d="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" fill="rgba(253,172,65,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-1" index="0" j="1" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" stroke="#ffffff"></path></g><g id="SvgjsG1271" class="apexcharts-series apexcharts-pie-series" seriesName="Addedxtoxcart" rel="3" data:realIndex="2"><path id="SvgjsPath1272" d="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" fill="rgba(255,91,92,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-2" index="0" j="2" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" stroke="#ffffff"></path></g><g id="SvgjsG1273" class="apexcharts-series apexcharts-pie-series" seriesName="Approved" rel="4" data:realIndex="3"><path id="SvgjsPath1274" d="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" fill="rgba(57,218,138,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-3" index="0" j="3" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" stroke="#ffffff"></path></g><g id="SvgjsG1275" class="apexcharts-series apexcharts-pie-series" seriesName="Rejected" rel="5" data:realIndex="4"><path id="SvgjsPath1276" d="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" fill="rgba(0,207,221,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-4" index="0" j="4" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 125.50000000000001 9.060975609756085 A 116.43902439024392 116.43902439024392 0 0 1 125.50000000000001 9.060975609756085 L 125.5 125.5 L 125.50000000000001 9.060975609756085" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1277" x1="0" y1="0" x2="251" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1278" x1="0" y1="0" x2="251" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1261" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(90, 141, 238);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 172, 65);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 91, 92);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(57, 218, 138);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 207, 221);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="card shadow-none">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Orders Source</h4>
                                                    </div>
                                                    <div id="subs_type" class="card-body" style="min-height: 322.7px;"><div id="apexcharts8l90cfwn" class="apexcharts-canvas apexcharts8l90cfwn apexcharts-theme-light" style="width: 410px; height: 322.7px;"><svg id="SvgjsSvg1245" width="410" height="322.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="410" height="322.70000000000005"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 24px; right: 5px;"><div class="apexcharts-legend-series" rel="1" seriesname="" data:collapsed="false" style="margin: 2px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(90, 141, 238) !important; color: rgb(90, 141, 238); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"></span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG1247" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1246"><clipPath id="gridRectMask8l90cfwn"><rect id="SvgjsRect1249" width="330" height="322" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8l90cfwn"></clipPath><clipPath id="nonForecastMask8l90cfwn"></clipPath><clipPath id="gridRectMarkerMask8l90cfwn"><rect id="SvgjsRect1250" width="328" height="324" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1251" class="apexcharts-pie"><g id="SvgjsG1252" transform="translate(0, 0) scale(1)"><g id="SvgjsG1253" class="apexcharts-slices"><g id="SvgjsG1254" class="apexcharts-series apexcharts-pie-series" seriesName="" rel="1" data:realIndex="0"><path id="SvgjsPath1255" d="M 162 9.902439024390219 A 150.09756097560978 150.09756097560978 0 0 1 162 9.902439024390219 L 162 160 L 162 9.902439024390219" fill="rgba(90,141,238,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-pie-slice-0" index="0" j="0" data:angle="0" data:startAngle="0" data:strokeWidth="2" data:value="0" data:pathOrig="M 162 9.902439024390219 A 150.09756097560978 150.09756097560978 0 0 1 162 9.902439024390219 L 162 160 L 162 9.902439024390219" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1256" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1257" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1248" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(90, 141, 238);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                </div>
                                            </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
</div>    </div>
</div>
