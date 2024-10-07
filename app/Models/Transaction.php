<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'tx_hash', 'amount', 'currency', 'allocated_tokens'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
