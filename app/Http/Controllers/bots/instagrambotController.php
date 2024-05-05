<?php

namespace App\Http\Controllers\bots;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class instagrambotController extends Controller
{
    public function index()
    {
        return view('content.Bots.instagrambot');
    }
}
