<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EachUserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(User $user) {
        return view('admin.dashboard.eachuser', [
            'user' => $user
        ]);
    }

    public function store(User $user) {
        DB::beginTransaction();
        try{
            $user->admin_active = !$user->admin_active;
            $user->save();
            DB::commit();
            return back()->with('message', 'Successfully Updated the user state');
        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', $exception->getMessage());
        }
    }

    public function balance(User $user, Request $request) {
        DB::beginTransaction();
        try{
            $balance = preg_replace('/[^\p{L}\p{N}\s]/u', '', $request['balance']);
            if ($user->balance > $balance) {
                Transactions::create([
                    'amount' => floatval($user->balance) - floatval($balance),
                    'users_id' => $user->id,
                    'incoming' => 'D'
                ]);
            } else if ($user->balance < $balance) {
                Transactions::create([
                    'amount' => floatval($balance) - floatval($user->balance),
                    'users_id' => $user->id,
                    'incoming' => 'C'
                ]);
            }
            $user->balance = $balance;
            $user->save();
            DB::commit();
            return back()->with('messagebalance', "Successfully updated user's balance");
        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('errorbalance', $exception->getMessage());
        }
    }
}
