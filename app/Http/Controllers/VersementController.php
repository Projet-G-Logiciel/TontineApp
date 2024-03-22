<?php

namespace App\Http\Controllers;
use App\Models\Log;
use App\Models\User;
use App\Models\Profil;
use App\Models\Versement;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class VersementController extends Controller
{
    //ajouter un versement
    public function addcotisation(Request $request)
    {
        
        // $request->validate([
        //     'type' => ['required', 'string', 'max:255'],
        // ]);
        // dd(Auth::user()->id);
        $cotisation = Versement::create([
            'montant' => $request->montant_cotisation,
            'type' =>$request->cotisation,
            'user_id'=>Auth::user()->id,
            'seance_id'=>$request->id_seance,
        ]);
        $descLog = "Versement d'une cotisation de "+$request->montant_cotisation;
        $log = Log::create([
            'type_log'=>0,
            'log'=>$descLog,
            'user_id'=>$user->id,
        ]);
        
        return back()->with('Ajout reussi');
    }

    public function addEpargne(Request $request)
    {

        // $request->validate([
        //     'montant' => ['required', 'int'],
        //     'type' => ['required', 'string', 'max:255'],
        // ]);
        $epargne = Versement::create([
            'montant' => $request->montant_epargne,
            'type' =>$request->epargne,
            'user_id'=>Auth::user()->id,
            'seance_id'=>$request->id_seance,

        ]);
        $descLog = "Versement d'une epargne de "+$request->montant_epargne;
        $log = Log::create([
            'type_log'=>2,
            'log'=>$descLog,
            'user_id'=>Auth::user()->id,
         ]);

        return back()->with('Ajout reussi');
    }
}