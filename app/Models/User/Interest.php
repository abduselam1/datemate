<?php

namespace App\Models\User;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Interest extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(UserInfo::class);
    }
}
