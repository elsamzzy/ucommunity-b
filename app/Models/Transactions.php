<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'amount',
        'users_id',
        'incoming',
    ];

    public function Trans() {
        return $this->hasMany(User::class, 'id');
    }
}
