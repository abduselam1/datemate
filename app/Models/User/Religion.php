<?php

namespace App\Models\User;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Religion extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the users for the Religion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(UserInfo::class);
    }
}
