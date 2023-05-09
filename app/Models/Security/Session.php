<?php

namespace App\Models\Security;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
