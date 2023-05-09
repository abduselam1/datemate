<?php

namespace App\Models\Payment;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'expired_at',
        'transaction_id',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
