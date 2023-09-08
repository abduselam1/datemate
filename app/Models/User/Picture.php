<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function picture(): Attribute
    {
        return Attribute::make(
            fn(string $value) => asset('storage/' . $this->url),
        );
//        return asset('storage/' . $this->url);
    }

    public function thumbnail(): Attribute
    {
        return Attribute::make(
            fn(string $value) => asset(  $this->thumbnail_url),
        );
    }




    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
