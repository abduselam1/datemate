<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'url',
        'thumbnail_url',
        'ext',
        'size',
        'is_primary',
    ];

    protected $casts = [
        'size' => 'integer',
        'is_primary' => 'boolean',
    ];

    public function picture()
    {
        return asset('storage/' . $this->url);
    }

    public function thumbnail()
    {
        return asset('storage/' . $this->thumbnail_url);
    }

    

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
