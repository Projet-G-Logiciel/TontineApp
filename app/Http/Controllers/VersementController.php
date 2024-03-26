<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Versement;
use App\Models\Profil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


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

        return back()->with('Ajout reussi');
    }
}