<?php

namespace App\Http\Controllers\Admin\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeactivateController extends Controller
{
    public function activate(User $user) {
        User::where('email', $user->email)->update([
            'deactivate' => '0'
        ]);

        return back();
    }

    public function deactivate(User $user) {
        User::where('email', $user->email)->update([
            'deactivate' => '1'
        ]);

        return back();
    }
}
