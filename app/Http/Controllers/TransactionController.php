<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $user = User::firstOrCreate(
            ['wallet_address' => $request->wallet_address],
            ['name' => $request->name, 'email' => $request->email]
        );

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'tx_hash' => $request->tx_hash,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'allocated_tokens' => $request->allocated_tokens,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction recorded successfully',
            'transaction' => $transaction
        ]);
    }

    public function showTransactions($walletAddress)
    {
        $user = User::where('wallet_address', $walletAddress)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ]);
        }

        return response()->json([
            'success' => true,
            'transactions' => $user->transactions
        ]);
    }
    public function getProgress()
    {
        $totalTransactions = Transaction::count();
        return response()->json([
            'success' => true,
            'total_transactions' => $totalTransactions,
        ]);
    }
}
