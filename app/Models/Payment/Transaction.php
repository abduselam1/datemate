<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'payment_method_id',
        'transaction_number',
        'is_approved',
    ];

    
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

   
    public function subscription(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
