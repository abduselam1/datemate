<?php

namespace App\Models\User;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mood extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    
    public function users(): HasMany
    {
        return $this->hasMany(UserInfo::class);
    }
    
}
