<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const STATUS_DEFAULT = 100;
    const STATUS_PENDING = 1;
    const STATUS_SUCCESS = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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

    public function getHashIdAttribute()
    {
        return hashid_encode($this->id,'');
    }

    public function resolveRouteBinding($value, $field = null)
    {
        if (!is_numeric($value))
        {
            return $this->where('id', hashid_decode($value, 'user'))->firstOrFail();
        }

        return parent::resolveRouteBinding($value, $field);
    }

    public function presences()
    {
        return $this->hasMany(Presence::class);
    }
}
