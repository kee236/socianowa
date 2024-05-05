@extends('layouts/contentNavbarLayout')

@section('content')

<div class="content-wrapper">
            <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">Telegram Bot Settings</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="https://app.socialnowa.io/dashboard"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item"><a href="https://app.socialnowa.io/n_telegram">Telegram bot</a></li>
                        <li class="breadcrumb-item active">Telegram Bot Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<div class="section-body ntheme main">
    <form action="https://app.socialnowa.io/n_telegram/save_bot_settings/0" method="POST">
        <div class="card" id="nodata">
            <div class="card-header">
                <h5 class="card-title">Connect Telegram Bot</h5>
            </div>
            <div class="card-body">

                <input type="hidden" name="csrf_token" id="csrf_token" value="1fdcfabc77f6e591d5a81ce5bc19bf3d582487d000adda09b89c9d6f98cbad5b">

                <div class="row mt-2">
                    <div class="col-12">
                        <p>Create your token by writing to @BotFather on Telegram. Then paste your token below.</p>
                    </div>

                    <div class="col-12">
                        <fieldset>
                            <div class="input-group">
                                <input type="text" class="form-control" value="" name="token" id="token" aria-describedby="basic-addon2">
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12 ">
                        <button class="btn btn-primary mt-2"><i class="bx bx-save"></i> Save</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
 </div>
 @endsection
