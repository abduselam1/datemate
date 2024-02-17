<?php

namespace App\Models\User;

use App\Models\User;
use App\Models\User\Mood;
use App\Models\User\Interest;
use App\Models\User\Religion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id',
        'religion_id',
        'mood_id',
        'sex',
        'interested_sex',
        'dob',
        'purpose',
        'job_title_id',
        'company_name',
        'school',
        'education_level',
        'phone_number',
        'bio',
        'other',
        'height',
        'country',
        'city',
        'relationship',
        'star',
        'smoking',
        'drinking',
        'personality'
    ];

    protected $casts = [
        'dob' =>            'date',
        'other' =>          'array',
        'height' =>         'double',
        'sex' =>            'boolean',
        'interested_sex' => 'boolean',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class);
    }

    public function mood(): BelongsTo
    {
        return $this->belongsTo(Mood::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function jobTitle(): BelongsTo
    {
        return $this->belongsTo(JobTitle::class);
    }

}
