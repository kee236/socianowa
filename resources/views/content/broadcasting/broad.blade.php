@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-wrapper">
        <div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Broadcasting</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Broadcasting</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="bg-transparent shadow-none">
    <div class="row pills-stacked">
        <div class="col-md-3 col-sm-12">
            <ul class="nav nav-pills flex-column text-center text-md-left">
                                    <li class="nav-item ">
                        <a href="#bxl-messenger" class="nav-link align-items-center active" data-toggle="pill" aria-expanded="true">
                            <i class="bx bxl-messenger"></i>
                            Messenger Broadcasting</a>
                    </li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content p-0 bg-transparent shadow-none">

                <div role="tabpanel" class="tab-pane card active" id="bxl-messenger" aria-labelledby="bxl-messenger" aria-expanded="true">
                    <div class="card-header border-bottom">
                        <h4 class="card-title d-flex align-items-center">Messenger Broadcasting</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                         <div class="col-sm-12">
                                    <div class="card border">
                                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                            <h5 class="card-title"><i class="bx bx-group"></i> Subscriber broadcast                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Non-promo with tag, 24h structured message broadcast to messenger bot subscribers</p>
                                            <a href="/messenger_bot_enhancers/subscriber_broadcast_campaign" class="card-cta d-inline-flex align-items-center">Campaign list                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                                            <div class="col-sm-12">
                                    <div class="card border">
                                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                            <h5 class="card-title"><i class="bx bx-group"></i> OTN subscriber broadcast                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>One-time notification request follow-up message broadcasting.</p>
                                            <a href="/messenger_bot_broadcast/otn_subscriber_broadcast_campaign" class="card-cta d-inline-flex align-items-center">Campaign list                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                  <div class="col-sm-12">
                                    <div class="card border">
                                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                            <h5 class="card-title"><i class="bx bx-group"></i> Recurring Notification Broadcast                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p>Recurring Notification request follow-up message broadcasting.</p>
                                            <a href="/messenger_bot_broadcast/rcn_subscriber_broadcast_campaign" class="card-cta d-inline-flex align-items-center">Campaign list                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                    <div class="collapse" id="collapseExample">
                                        <div class="card border data-card">
                                            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                                <h5 class="card-title"><i class="bx bx-adjust"></i> Comparision among different broadcasts                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>Feature</th>
                                                            <th>Conversation broadcast</th>
                                                            <!-- <th>Quick broadcast</th> -->
                                                            <th>Subscriber broadcast</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>Message type</th>
                                                            <td>Promotional</td>
                                                            <!-- <td>Non-promotional</td> -->
                                                            <td>Promotional &amp; non-promotional</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Message structure</th>
                                                            <td>Text only</td>
                                                            <!-- <td>Structured message</td> -->
                                                            <td>Structured message</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Bulk send limit/campaign</th>
                                                            <td>Unlimited</td>
                                                            <!-- <td>10k</td> -->
                                                            <td>Unlimited</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Sending speed</th>
                                                            <td>One by one with 10-25 seconds delay</td>
                                                            <!-- <td>Send all with one call within few seconds</td> -->
                                                            <td>One by one without any delay</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Subscribe by comment private reply</th>
                                                            <td>Yes</td>
                                                            <!-- <td>No, user need to send message</td> -->
                                                            <td>No, user need to send message</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Audience</th>
                                                            <td>All existing subscribers</td>
                                                            <!-- <td>All existing subscribers <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="Audience" data-content="The actual send, estimated reach & page subscribers may differ. this campaign is totally handled by Facebook for each send. So actual send may differ for various reason. As for example, if any subscriber did not interact with your bot for many days like 2 months or page sent private reply of comment but he never replied back, in those cases, those subscribers will not be eligible for quick broadcasting. While targeting by label it may happen that some subscribers have label in Facebook but have not been assigned label in our system, they are eligible for quick broadcasting."><i class='bx bx-info-circle'></i> </a></td> -->
                                                            <td>Bot subscribers</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Promo content allowed</th>
                                                            <td>Yes</td>
                                                            <!-- <td>No</td> -->
                                                            <td>
                                                                Yes, following 24h policy                                                                <a href="#" data-placement="top" data-html="true" data-toggle="popover" data-trigger="focus" title="" data-content="24h rule : pages are permitted to send promotional message to subscribers, those has sent message to your page in last 24 hours. The 24-hour limit is refreshed each time a person responds to a business through one of the eligible actions listed in messenger conversation entry points." data-original-title="24h"><i class="bx bx-info-circle"></i> </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Visibility in page inbox</th>
                                                            <td>Yes</td>
                                                            <!-- <td>
                        No                        <a href="#" data-placement="top" data-toggle="popover" data-trigger="focus" title="Visibility in page inbox" data-content="Quick broadcast messages are only visible to the message recipient. Broadcast messages will not appear in the page inbox."><i class='bx bx-info-circle'></i> </a>

                        </td>-->
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Report</th>
                                                            <td>Report of each send</td>
                                                            <!-- <td>Report of total send count</td> -->
                                                            <td>Report of each send</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Api used</th>
                                                            <td>Conversation api</td>
                                                            <!-- <td>Messenger broadcast API</td> -->
                                                            <td>Messenger send API</td>
                                                        </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane card " id="bxs-chat" aria-labelledby="bxs-chat" aria-expanded="true">
                    <div class="card-header border-bottom">
                        <h4 class="card-title d-flex align-items-center">SMS broadcasting</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-plug"></i> SMS API settings                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Twilio, Plivo, Clickatell, Nexmo, AfricasTalking...</p>
                                        <div class="dropdown">
                                            <a class="no_hover card-cta d-inline-flex align-items-center" href="/sms_email_manager/sms_api_lists">Actions                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bxs-chat"></i> SMS campaign                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Campaign list, new campaign, report...</p>
                                        <div class="dropdown">
                                            <a class="no_hover card-cta d-inline-flex align-items-center" href="/sms_email_manager/sms_campaign_lists">Actions                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                                                </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane card " id="bx-envelope" aria-labelledby="bx-envelope" aria-expanded="true">
                    <div class="card-header border-bottom">
                        <h4 class="card-title d-flex align-items-center">Email broadcasting</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-plug"></i> Email API settings                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>SMTP, Mandril, Mailgun, Sendgrid...</p>
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="no_hover card-cta d-inline-flex align-items-center" style="font-weight: 500;">Actions <i class="bx bx-chevron-right"></i></a>
                                            <div class="dropdown-menu">
                                                <h6 class="dropdown-header">Tools</h6>
                                                <a class="dropdown-item has-icon" href="/sms_email_manager/smtp_config"><i class="bx bx-plug mr-50"></i> SMTP API                                                </a>
                                                <a class="dropdown-item has-icon" href="/sms_email_manager/mandrill_api_config"><i class="bx bx-plug mr-50"></i> Mandrill API                                                </a>
                                                <a class="dropdown-item has-icon" href="/sms_email_manager/sendgrid_api_config"><i class="bx bx-plug mr-50"></i> Sendgrid api                                                </a>
                                                <a class="dropdown-item has-icon" href="/sms_email_manager/mailgun_api_config"><i class="bx bx-plug mr-50"></i> Mailgun API                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-list-ul"></i> Email templates                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Templates for email sequecne message...</p>
                                        <div class="dropdown">
                                            <a href="/sms_email_manager/template_lists/email" class="no_hover card-cta d-inline-flex align-items-center">Actions                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane card " id="bx-paper-plane" aria-labelledby="bx-paper-plane" aria-expanded="true">
                    <div class="card-header border-bottom">
                        <h4 class="card-title d-flex align-items-center">Sms/email sequence campaigner (external contacts)</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-envelope"></i> Sequence campaign                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <h4></h4>
                                        <p>Sequence campaing for external contacts...</p>
                                        <div class="dropdown">
                                            <a href="/sms_email_sequence/external_sequence_lists" class="no_hover card-cta d-inline-flex align-items-center">Actions                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-envelope"></i> Contact                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <h4></h4>
                                        <p>Sms/email contact, contact group/label</p>
                                        <div class="dropdown">
                                            <a href="/sms_email_manager/contact_group_list" class="no_hover card-cta d-inline-flex align-items-center">Group                                                <i class="bx bx-chevron-right"></i></a>
                                            <a href="/sms_email_manager/contact_list" class="no_hover card-cta d-inline-flex align-items-center">Contact                                                <i class="bx bx-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card border">
                                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                        <h5 class="card-title"><i class="bx bx-envelope"></i> Opt-in form builder                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <h4></h4>
                                        <p>Custom sms/email subscribers opt-in form builder for website.</p>
                                        <div class="dropdown">
                                            <a href="/email_optin_form_builder" class="no_hover card-cta d-inline-flex align-items-center">Action                                                <i class="bx bx-chevron-right"></i></a>
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


<style type="text/css">
    .popover {
        min-width: 330px !important;
    }

    .no_hover:hover {
        text-decoration: none;
    }

    .otn_info_modal {
        cursor: pointer;
    }

    #external_sequence_block {
        z-index: unset;
    }
</style>    </div>
@endsection
