<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message_id',
        'url',
        'thumbnail_url',
        'ext',
        'size',
    ];

    
    public function message(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
