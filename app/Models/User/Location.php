<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'place_id',
        'name',
        'address',
        'latitude',
        'longitude',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
