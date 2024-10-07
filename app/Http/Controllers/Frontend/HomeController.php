<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $clientId = env('THIRDWEB_CLIENT_ID'); // Get the clientId from .env
        return view('frontend.index', compact('clientId'));
    }}
