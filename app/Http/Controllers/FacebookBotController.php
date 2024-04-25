<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookBotController extends Controller
{
    public function index()
    {
        return view('content.Bots.Facebookbots');
    }
}
