<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            $log = Log::create([
                'type_log'=>1,
                'log'=>"Connexion reussie",
                'user_id'=>$user->id,
            ]);
            return Redirect::route('dashboard');
        }else{
            Auth::logout();
            return back()->with('Code invalide');
        }
    }
}
