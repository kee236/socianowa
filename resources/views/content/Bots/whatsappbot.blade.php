@extends('layouts/contentNavbarLayout')

@section('content')

<style>
    .custom-section-body {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    body {
        background-color: white;
    }
</style>
<div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">WhatsApp Bot Settings</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="https://app.socialnowa.io/dashboard"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item"><a href="https://app.socialnowa.io/n_wa">WhatsApp Bot</a></li>
                        <li class="breadcrumb-item active">WhatsApp Bot Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<div class="custom-section-body theme-main">
    <form action="https://app.socialnowa.io/n_wa/save_bot_settings/0" method="POST">
        <div class="custom-card" id="nodata">
            <div class="custom-card-header">
                <h5 class="custom-card-title">Connect WhatsApp Bot</h5>
            </div>
            <div class="custom-card-body">

                <input type="hidden" name="custom_csrf_token" id="custom_csrf_token" value="1fdcfabc77f6e591d5a81ce5bc19bf3d582487d000adda09b89c9d6f98cbad5b">

                <input type="hidden" name="custom_bsp_access_token" id="custom_bsp_access_token" value="">

                <input type="hidden" name="custom_is_new" id="custom_is_new" value="1">

                <input type="hidden" name="custom_bsp_on" id="custom_bsp_on" value="">

                <div class="row mt-2 ">
                    <div class="col-12 mb-1 ">
                        <p>This option allows you to connect your Facebook APP with our tool. <a href="/n_wa/help" target="_blank">For instructions on creating an app, click here.</a></p>
                    </div>

                    <div class="col-12 ">
                        <h4>Step 1</h4>
                    </div>

                    <div class="col-12 mb-1  ">
                        <p> You can connect to our app using the Facebook Login button:</p>
                        <button id="custom-launchWhatsAppSignup" style="background-color: #1877f2; border: 0; border-radius: 4px; color: #fff; cursor: pointer; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: bold; height: 40px; padding: 0 24px;">Login with Facebook</button>
                    </div>

                    <div class="col-12 mt-1" id="custom-bsp_bot_business_id_unhide" style="display: none">
                        <label for="custom-bsp_bot_business_id">Select WhatsApp Business ID</label>
                        <fieldset>
                            <select id="custom-bsp_bot_business_id" name="custom-bsp_bot_business_id">
                                <option value="" selected="selected">WhatsApp Business ID</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="col-12 mb-1 custom-bot_business_manual">
                        <label for="custom-bot_business_id">Provide your WhatsApp Business ID</label>
                        <fieldset>
                            <div class="input-group">
                                <input type="text" class="form-control" value="" name="custom-bot_business_id" id="custom-bot_business_id">
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12 custom-bot_business_manual ">
                        <label for="custom-bot_access_token">Provide your Access Token</label>
                        <fieldset>
                            <div class="input-group">
                                <input type="text" class="form-control" value="" name="custom-bot_access_token" id="custom-bot_access_token">
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12 mt-2 ">
                        <h4>Step 2</h4>
                    </div>
                    <div class="col-12 mt-1 ">
                        <p>Select your phone number after clicking the button to get numbers.</p>
                        <a href="#" id="custom-bot_get_numbers" class="btn btn-primary">
                            Get phone numbers
                        </a>
                    </div>
                    <div class="col-12 mt-1" id="custom-select_bot_id_number_unhide" style="display: none">
                        <label for="custom-select_bot_id_number">Select phone number for bot</label>
                        <fieldset>
                            <select id="custom-select_bot_id_number" name="custom-select_bot_id_number">
                                <option value="" selected="selected">Select phone number</option>
                            </select>
                        </fieldset>
                    </div>


                    <div class="col-12 mt-2" id="custom-save_bot_settings_unhide3" style="display:none">
                        <h4>Step 3</h4>
                    </div>
                    <div class="col-12 " id="custom-save_bot_settings_unhide" style="display:none">
                        <button class="btn btn-primary mt-2"><i class="bx bx-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
