<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerifyID extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('dashboard.verifyid', [
            'title' => 'Verify ID'
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'type' => ['required', 'string'],
           'document' => ['required']
        ]);
        DB::beginTransaction();
        try{
            $user = Auth::guard()->user();
            $doc_type = $request['document']->getClientmimeType();
            $doc_image = 'null';
            if($doc_type === 'image/jpeg'){
                $doc_image = 'supported';
                $doc_fex = '.jpg';
            }

            if($doc_type === 'image/png'){
                $doc_image = 'supported';
                $doc_fex = '.png';
            }

            if($doc_image === 'null'){
                return back()->with('document', 'The file is unsupported, Please upload a JPG or a PNG');
            }

            $doc_name = $user->id . $doc_fex;

            $doc_path = "public/id/";

            $request->file('document')->storeAs($doc_path, $doc_name);
            $user->picture_format = $doc_fex;
            $user->identity_type = $request['type'];
            $user->save();
            DB::commit();
            return redirect()->route('verify.success');
        } catch (\Exception $exception) {
            DB::rollback();
            return back()->with('error', $exception->getMessage());
        }
    }
}
