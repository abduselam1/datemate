<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'interaction_type_id',
        'applied_on',
        'seen',
    ];

    protected $casts = [
        'seen' => 'boolean'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function appliedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'applied_on');
    }

    
    public function interactionType(): BelongsTo
    {
        return $this->belongsTo(InteractionType::class);
    }
}
