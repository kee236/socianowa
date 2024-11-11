<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\layouts\WithoutNavbar;
use App\Http\Controllers\layouts\Fluid;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\bots\FacebookBotController;
use App\Http\Controllers\bots\FacebookBotsettingController;
use App\Http\Controllers\bots\existingaccountController;
use App\Http\Controllers\bots\FacebookController;
use App\Http\Controllers\bots\whatsappbotController;
use App\Http\Controllers\bots\telegrambotController;
use App\Http\Controllers\bots\instagrambotController;
use App\Http\Controllers\chats\nopageverifyController;
use App\Http\Controllers\chats\suscriberController;
use App\Http\Controllers\broadcasting\broadcastingController;
use App\Http\Controllers\comment\commentController;
use App\Http\Controllers\ecommerce\ecommerce;

// Main Page Route
Route::get('/', [Analytics::class, 'index'])->name('dashboard-analytics');

//nopageverify

// layout
Route::get('/layouts/without-menu', [WithoutMenu::class, 'index'])->name('layouts-without-menu');
Route::get('/layouts/without-navbar', [WithoutNavbar::class, 'index'])->name('layouts-without-navbar');
Route::get('/layouts/fluid', [Fluid::class, 'index'])->name('layouts-fluid');
Route::get('/layouts/container', [Container::class, 'index'])->name('layouts-container');
Route::get('/layouts/blank', [Blank::class, 'index'])->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name('pages-account-settings-connections');
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('pages-misc-under-maintenance');

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');



//ordered it

// routes/web.php
Route::resource('orders', OrderController::class);
Route::put('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('orders.update-status');





//facbookbot
Route::get('/bots/facebook', [FacebookBotController::class, 'index'])->name('Facebookbots');
Route::get('/bots/facebook/settings', [FacebookBotsettingController::class, 'index'])->name('Facebookbotsettings');
Route::get('/bots/account', [existingaccountController::class, 'index'])->name('exisitngaccount');

//whatsappbot
Route::get('/bots/whatsapp', [whatsappbotController::class, 'index'])->name('whatsappbot');

//telegrambot
Route::get('/bots/telegram', [telegrambotController::class, 'index'])->name('telegrambot');

//instagrambot
Route::get('/bots/instagram', [instagrambotController::class, 'index'])->name('instagrambot');

Route::get('/facebook/login', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

//chat
Route::get('/chats', [nopageverifyController::class, 'index'])->name('nopageverify');
Route::get('/subscriber', [suscriberController::class, 'index'])->name('suscriber');

Route::get('/broadcasting', [broadcastingController::class, 'index'])->name('broadcasting');

Route::get('/comment', [commentController::class, 'index'])->name('comment');

Route::get('/ecommerce', [ecommerce::class, 'index'])->name('ecommerce');
