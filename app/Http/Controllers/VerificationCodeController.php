<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class VerificationCodeController extends Controller
{
    public function verificationCode($id){
        $user = User::findOrFail($id);
        return view('auth.verificationCode',['id_user'=>$user->id]);
    }

    public function verification(Request $request){
        $code = intval($request->code);
        $id = intval($request->id);
        // dd($id);
        $codeUser = User::findOrFail($id);
        // dd($codeUser);
        if($codeUser->code == $code){
            $codeUser->code = Null;
            $codeUser->save();
            $user = User::findOrFail($id);
            Auth::login($user);
            return Redirect::route('dashboard');
        }else{
            Auth::logout();
            return back()->with('Code invalide');
        }
    }
}
