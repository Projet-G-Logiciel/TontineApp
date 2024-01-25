<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Notification;

class HomeController extends Controller
{


    //affiche la liste des membres
    public function liste_membre(){
        $profil=Profil::all();
        $membre = Profil::join('users','profils.id','=','users.profil_id')->get();
        return view('membres.liste_membre', ['profil'=>$profil, 'membre'=>$membre]);
    }

    //ajoute un membre
    public function add_membre(Request $request){
        $defaultPassword = $request->nom;
        $password = Hash::make($defaultPassword);
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'profil' => ['required', 'string', 'max:255']
        ]);
        $user = User::create([
            'name' => $request->nom,
            'surname' =>$request->prenom,
            'sex' =>$request->sexe,
            'email' => $request->email,
            'profil_id' =>$request->profil,
            'password' => $password,

        ]);
        return back()->with('suppression reussi');
    }

    //supprime un membre
    public function delete_membre($id){
        $user=User::find($id);
        $user->delete();
        return back()->with('suppression reussi');
    }

}
