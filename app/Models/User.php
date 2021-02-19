<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'address',
        'address_sec',
        'zip',
        'state',
        'country',
        'phone',
        'balance',
        'transactions',
        'file_extension',
        'deactivate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pics() {
        $pic=auth()->user()->id . auth()->user()->file_extension;
        return storage_path('app/passports/'.$pic);
    }

    public function name() {
        $alt=auth()->user()->first_name . ' ' . auth()->user()->last_name;
        return $alt;
    }
}
