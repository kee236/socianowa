<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class existingaccountController extends Controller
{
    public function index()
    {
        return view('content.Bots.existingaccount');
    }
}
