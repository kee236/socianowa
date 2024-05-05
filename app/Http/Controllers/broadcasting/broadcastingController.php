<?php

namespace App\Http\Controllers\broadcasting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class broadcastingController extends Controller
{
  public function index()
  {
    return view('content.broadcasting.broad');
  }
}
