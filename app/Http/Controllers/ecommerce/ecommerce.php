<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ecommerce extends Controller
{
  public function index()
  {
    return view('content.ecommerce.ecommerce');
  }
}
