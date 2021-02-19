<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
      'destination_bank',
        'swift_code',
        'destination_name',
        'destination_branch',
        'destination_bank_city',
        'amount',
        'destination_number',
    ];

    public function total() {
        $amount = $this->get()->where('users_id', auth()->user()->id)->count();
        return $amount;
    }
}
