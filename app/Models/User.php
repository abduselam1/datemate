<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Chat\Conversation;
use App\Models\Chat\Message;
use App\Models\Payment\Subscription;
use App\Models\Security\Report;
use App\Models\Security\Session;
use App\Models\User\Location;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessFilament(): bool
    {
        // return $this->hasRole('Super Admin') || $this->hasRole("Admin") ? true : false;

        return true;
    }

    // public function getFilamentName(): string
    // {
    //     return $this->first_name;
    // }

    // public function getMyProfile()
    // {
    //     return empty($this->photo) ? "https://ui-avatars.com/api/?name={$this->name}&color=7F9CF5&background=EBF4FF" : asset('storage/' . $this->photo);
    // }

    /**
     * Get the info associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function info(): HasOne
    {
        return $this->hasOne(UserInfo::class);
    }

    
    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    
    public function setting(): HasOne
    {
        return $this->hasOne(UserSetting::class);
    }

    
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }


    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function reported(): HasMany
    {
        return $this->hasMany(Report::class, 'reported_user');
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    
    public function interaction(): HasMany
    {
        return $this->hasMany(Interaction::class);
    }

    public function interactionApplied(): HasMany
    {
        return $this->hasMany(Interaction::class, 'applied_on');
    }
    
    
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
    
    
    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }
    


}
