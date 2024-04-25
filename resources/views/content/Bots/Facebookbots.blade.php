@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-wrapper">
        <div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Messenger Bot</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Messenger Bot</li>
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
                    <h5 class="card-title"><i class="bx bxs-cog"></i> Bot settings                    </h5>
                </div>
                <div class="card-body">
                    <p>Bot reply, persistent menu, sequence message etc</p>
                    <a href="/bots/facebook/settings" class="card-cta d-inline-flex align-items-center">Actions <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="card-title"><i class="bx bxs-grid"></i> Post-back manager</h5>
                </div>
                <div class="card-body">
                    <p>Postback ID &amp; postback data management</p>
                    <a href="https://app.socialnowa.io/messenger_bot/template_manager" class="card-cta d-inline-flex align-items-center">Actions <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>
                    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><i class="bx bxs-grid"></i> OTN post-back manager<i class="bx bxs-help-circle otn_info_modal" style="color: #6777EF;" data-toggle="modal" data-target="#otn_info_modal"></i></h5>
                    </div>
                    <div class="card-body">
                        <p>OTN postback id &amp; postback data management</p>
                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="no_hover" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>
                            <div class="dropdown-menu ">
                                <div class="dropdown-header">Tools</div>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot/otn_template_manager"><i class="bx bxs-checkbox-checked"></i> Manage templates                                </a>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot/otn_subscribers"><i class="bx bx-bullseye"></i> Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="card-title"><i class="bx bx-check-circle"></i> Whitelisted domains                    </h5>
                </div>
                <div class="card-body">
                    <p>Whitelist domain for web url and other purposes</p>
                    <a href="https://app.socialnowa.io/messenger_bot/domain_whitelist" class="card-cta d-inline-flex align-items-center">Actions <i class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>

                    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><i class="bx bxs-bell-ring"></i> Messenger engagement                        </h5>
                    </div>

                    <div class="card-body">
                        <p>Checkbox, send to messenger, customer chat, m.me</p>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="no_hover card-cta d-inline-flex align-items-center" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>
                            <div class="dropdown-menu ">
                                <h6 class="dropdown-header">Tools</h6>
                                                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot_enhancers/checkbox_plugin_list"><i class="bx bxs-checkbox-checked mr-50"></i> Checkbox plugin                                    </a>                                                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot_enhancers/send_to_messenger_list">
                                    <i class="bx bx-paper-plane mr-50"></i> Send to messenger                                    </a>                                                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot_enhancers/mme_link_list"><i class="bx bx-link mr-50"></i> M.me link                                    </a>                                                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/messenger_bot_enhancers/customer_chat_plugin_list">
                                    <i class="bx bx-comment-dots mr-50"></i> Customer chat plugin                                    </a>                            </div>
                        </div>

                    </div>
                </div>
            </div>


                    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><i class="bx bxs-save"></i> Saved templates</h5>
                    </div>
                    <div class="card-body">
                        <p>Saved exported bot settings</p>
                        <a href="https://app.socialnowa.io/messenger_bot/saved_templates" class="card-cta d-inline-flex align-items-center">Actions                            <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            </div>

                        <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bx-plug"></i> JSON API Connector                            </h5>
                        </div>
                        <div class="card-body">
                            <p>Connect bot data with 3rd party apps</p>
                            <a href="https://app.socialnowa.io/messenger_bot_connectivity/json_api_connector" class="card-cta d-inline-flex align-items-center">Actions                                <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>


                        <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bx-detail"></i> Webform builder                            </h5>
                        </div>
                        <div class="card-body">
                            <p>Custom data collection form for messenger bot</p>
                            <a href="https://app.socialnowa.io/messenger_bot_connectivity/webview_builder_manager" class="card-cta d-inline-flex align-items-center">Actions                                <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                        <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><i class="bx bxl-stack-overflow"></i> User input flow &amp; custom fields                            </h5>
                        </div>
                        <div class="card-body">
                            <p>Create flow campaign &amp; custom fields to store user`s data</p>

                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="no_hover card-cta d-inline-flex align-items-center" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>

                                <div class="dropdown-menu ">
                                    <div class="dropdown-header">Tools</div>
                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/custom_field_manager/campaign_list"><i class="bx bxs-checkbox-checked mr-50"></i> User input flow campaign                                    </a>
                                    <a class="dropdown-item has-icon" href="https://app.socialnowa.io/custom_field_manager/custom_field_list"><i class="bx bxs-checkbox-checked mr-50"></i> Custom fields                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                    <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><i class="bx bx-paper-plane"></i> Email auto responder                        </h5>
                    </div>
                    <div class="card-body">
                        <p>Add Mailchimp API &amp; pull list</p>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown" class="no_hover card-cta d-inline-flex align-items-center" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>

                            <div class="dropdown-menu ">
                                <h6 class="dropdown-header">Tools</h6>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/email_auto_responder_integration/mailchimp_list"><i class="bx bxs-checkbox-checked mr-50"></i> Mailchimp integration                                </a>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/email_auto_responder_integration/sendinblue_list"><i class="bx bxs-checkbox-checked mr-50"></i> Sendinblue integration                                </a>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/email_auto_responder_integration/activecampaign_list"><i class="bx bxs-checkbox-checked mr-50"></i> ActiveCampaign integration                                </a>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/email_auto_responder_integration/mautic_list"><i class="bx bxs-checkbox-checked mr-50"></i> Mautic integration                                </a>
                                <a class="dropdown-item has-icon" href="https://app.socialnowa.io/email_auto_responder_integration/acelle_list"><i class="bx bxs-checkbox-checked mr-50"></i> Acelle integration                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </div>
</div>


<style type="text/css">
    .otn_info_modal {
        cursor: pointer;
    }
</style>


<div class="modal fade" id="otn_info_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><i class="bx bx-group"></i> OTN subscribers                </h3>
                <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="section">
                    <h2 class="section-title font-medium-2">One-time notification</h2>
                    <p>The messenger platform`s one-time notification allows a page to request a user to send one follow-up message after 24-hour messaging window have ended. The user will be offered to receive a future notification. Once the user asks to be notified, the page will receive a token which is an equivalent to a permission to send a single message to the user. The token can only be used once and will expire within 1 year of creation.</p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>

        </div>
    </div>
</div>

    </div>
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownToggles = document.querySelectorAll('[data-toggle="dropdown"]');
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener("click", function(event) {
                event.preventDefault();
                var dropdownMenu = this.nextElementSibling;
                dropdownMenu.classList.toggle('show');
            });
        });

        window.addEventListener("click", function(event) {
            var dropdownMenus = document.querySelectorAll('.dropdown-menu');
            dropdownMenus.forEach(function(menu) {
                if (!menu.contains(event.target)) {
                    menu.classList.remove('show');
                }
            });
        });
    });
</script>
@endpush
