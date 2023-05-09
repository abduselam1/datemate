<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'intended_user',
        'body',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function IntendedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'intended_user');
    }
    
}
