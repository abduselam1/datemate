<?php

namespace App\Models\Security;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'content',
        'img_url',
        'reason',
        'reported_user',
    ];

    public function picture()
    {
        return  asset('storage/' . $this->url);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function reportedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reported_user');
    }
}
