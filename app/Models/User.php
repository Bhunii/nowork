<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "users";

    protected $attributes = [
        'role_id' => '4',
    ];

    protected $fillable = [
        'doc_type',
        'doc_num',
        'name',
        'last_name',
        'phone',
        'genre',
        'user_name',
        'email',
        'password'
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

    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function instructors(){
        return $this->hasMany(Instructor::class, 'user_id', 'id');
    }

    public function candidate(){
        return $this->hasOne(Candidate::class, 'user_id');
    }

    public function recruiter(){
        return $this->hasOne(Recruiter::class, 'user_id');
    }
}
