<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'notification_paused',
        'notifications',
        'privacy',
    ];

    protected $casts = [
        'notification_paused' => 'boolean',
        'notifications' => 'array',
        'privacy' => 'array',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
