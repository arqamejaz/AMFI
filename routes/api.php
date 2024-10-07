<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/transactions', [TransactionController::class, 'createTransaction']);

Route::post('/login', function(Request $request) {
    $walletAddress = $request->input('wallet_address');

    // Check if wallet exists in DB
    $user = \App\Models\User::where('wallet_address', $walletAddress)->first();

    if ($user) {
        // If user exists, generate a random number
        $randomNumber = rand(100000, 999999);

        // Store the random number in the session
        Session::put('auth_number', $randomNumber);
        if (Session::has('auth_number')) {
        return response()->json([
            'success' => true,
            'message' => 'User found and session updated',
            'auth_number' => $randomNumber,
        ]);}
        else {
            return response()->json([
                'success' => true,
                'message' => 'session not stored',
                'auth_number' => $randomNumber,
            ]);
        }
    }

    return response()->json([
        'success' => false,
        'message' => 'User not found',
    ]);
});

Route::get('/crypto-price/{symbol}', function($symbol) {
    $client = new \GuzzleHttp\Client();
    $response = $client->get("https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol={$symbol}", [
        'headers' => [
            'X-CMC_PRO_API_KEY' => 'd2f067f3-6d20-4fe5-9541-b1bb14a2949a',
            'Accept' => 'application/json',
        ],
    ]);
    return response()->json(json_decode($response->getBody()->getContents())); // Return JSON response
});
