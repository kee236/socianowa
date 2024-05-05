<?php

namespace App\Http\Controllers\chats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nopageverifyController extends Controller
{
    public function index()
    {
        // Your logic to determine if no account is connected goes here
        $noAccountConnected = true; // Example: Set to true for demonstration purposes

        return view('content.chats.nopageverify', compact('noAccountConnected'));
    }
}
