<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


class PersonalInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'guest',
            'personal',
        ]);
    }

    public function index() {
        $name = Route::currentRouteName();

        return view('auth.personal', [
            'name' => $name
        ]);
    }


    public function store(Request $request, User $user) {
        $user=session('email');
        foreach ($user as $users){
            $email=$users;
        }


        $this->validate($request, [
           'first_name' => ['required', 'max:255', 'string'],
            'last_name' => ['required', 'max:255', 'string'],
            'gender' => ['required', 'max:255', 'string'],
            'file' => ['required'],
            'dob' => ['required', 'max:255', 'string'],
            'address' => ['required', 'max:255', 'string'],
            'address_sec' => ['max:255'],
            'zip' => ['required', 'max:255', 'string'],
            'state' => ['required', 'max:255', 'string'],
            'country' => ['required', 'max:255', 'string'],
            'phone' => ['required', 'max:11', 'string', 'min:10']
        ]);

        //->getClientmimeType()
        //->getfilename()
        $type = $request['file']->getClientmimeType();
        $regdetails = User::get()->where('email', $email);
        foreach($regdetails as $detail){
            $id=$detail->id;
        }
        $image = 'null';
        if($type === 'image/jpeg'){
            $image = 'supported';
            $ex = '.jpg';
        }

        if($type === 'image/png'){
            $image = 'supported';
            $ex = '.png';
        }

        if($image === 'null'){
            return back()->with('image', 'The file is unsupported, Please upload a .jpg or .png file');
        }

        $request->file('file')->storeAs('passports', $id.$ex);

        User::where('email', $email)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'gender' => $request['gender'],
            'dob' => $request['dob'],
            'address' => $request['address'],
            'zip' => $request['zip'],
            'state' => $request['state'],
            'country' => $request['country'],
            'phone' => $request['phone'],
            'file_extension' => $ex,
        ]);

        if(!empty($request->input('address_sec'))){
            User::where('email', $email)->update([
                'address_sec' => $request['address_sec']
            ]);
        }

        $request->session()->forget('email');

        session(['success' => 'yes']);

        return redirect()->route('success');
    }
}
