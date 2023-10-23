<?php

namespace App\Models\Security;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_address',
        'payload',
        'country',
        'city',
        'browser',
        'last_activity',
    ];

    public $timestamps = false;

    protected $casts = [
        'last_activity'=> 'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $appends = ['formatedTime'];

    public function getFormatedTimeAttribute()
    {

        return $this->last_activity->diffForHumans();
    }
}
