<?php

namespace App\Http\Controllers\chats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suscriberController extends Controller
{
    public function index()
    {
        return view('content.chats.suscriber');
    }
}
