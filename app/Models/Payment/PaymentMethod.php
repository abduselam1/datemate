<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'img_url',
        'private_key',
        'public_key',
    ];

   
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
