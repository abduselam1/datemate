<?php

namespace App\Models\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'conversation_id',
        'user_id',
        'reply_to',
        'text',
        'ip_address',
        'device',
        'location',
        'lat',
        'long',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'reply_to' => 'integer',
    ];

    
    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class, 'foreign_key', 'other_key');
    }

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reply(){
        return $this->reply_to ? $this->belongsTo(Message::class,'reply_to') : $this->reply_to;
    }

    
    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }


}
