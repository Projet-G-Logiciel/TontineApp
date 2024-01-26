<?php

namespace App\Http\Controllers;
use App\Models\Demande_emprunt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpruntController extends Controller
{
    public function demandeEmprunt(Request $request)
    {
        // dd($request);
        $demandeEmprunt = Demande_emprunt::create([
            'montant' => $request->montant_emprunter,
            'objet' =>$request->objet,
            'status' => 0,
            'user_id'=>Auth::user()->id,
            'seance_id'=>$request->id_seance,
        ]);

        return back()->with('Emprunt Demander.');
    }
}
