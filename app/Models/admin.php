<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class admin extends Authenticatable
{
    public $table = 'admin';
    use HasFactory;

    protected $fillable = [
        'username',
        'password'
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];

    public function user() {
        return auth()->guard('admin')->user();
    }
}
