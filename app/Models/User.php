<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use  HasFactory,  SoftDeletes;
    use HasApiTokens;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**  GH'DK ;VNL
     * The attributes that are mass assignable.
     *
     * @var string[]
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'phone_number',
        'role',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var array
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
<<<<<<< HEAD
     * @var array<string, string>
=======
     * @var array
>>>>>>> 803db03126d5256bd119537273ea7929bf89a496
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function comment()
    {

        return $this->hasMany(Comment::class);
    }



    public function profile()
    {

        return $this->hasOne(Profile::class);
    }





}
