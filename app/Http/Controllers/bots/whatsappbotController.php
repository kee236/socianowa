<?php
namespace App\Http\Controllers\bots;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class whatsappbotController extends Controller
{
    public function index()
    {
        return view('content.Bots.whatsappbot');
    }
}
