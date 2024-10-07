<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Log;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        // Log::info('User ID:', ['user_id dashboard' => auth()->id()]);
        $walletAddress = auth()->user()->wallet_address;
        $transactions = Transaction::where('user_id', auth()->id())->get();
        // dd(auth()->id());
        return view('backend.index', compact('transactions', 'walletAddress'));
    }
    public function show(){

    }
}
