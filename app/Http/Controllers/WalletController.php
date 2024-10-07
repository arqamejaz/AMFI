<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function verifyWallet(Request $request)
    {
        $walletAddress = $request->input('walletAddress');

        // Check if the wallet address exists in the users table
        $user = User::where('wallet_address', $walletAddress)->first();

        if ($user) {
            // Log the user in by setting a session or generating a token

            auth()->login($user);
            Log::info('User logged in:', ['user_id check' => $user->id]);

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }
}
