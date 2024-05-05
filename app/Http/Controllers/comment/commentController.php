<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class commentController extends Controller
{
  public function index()
  {
    return view('content.comment.comment');
  }
}
