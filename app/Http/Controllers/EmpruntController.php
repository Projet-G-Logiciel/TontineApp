<?php

namespace App\Http\Controllers;
use App\Models\Demande_emprunt;
use App\Models\Notification;

use App\Models\Emprunt;

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

        $descriptionNotif = "Le membre ".Auth::user()->name." veux emprunter une somme de ".$demandeEmprunt->montant." pour ". $demandeEmprunt->objet ." c'est possible?";
        $notif = Notification::create([
            'description' => $descriptionNotif,
            'user_id' => Auth::user()->id,
        ]);
        // dd($descriptionNotif);

        return back()->with('Emprunt Demander.');
    }
    public function show(){
        $emprunts = Emprunt::join('users','users.id','=','emprunts.user_id')->select('emprunts.*','users.name')->get();

        return view('emprunt',['emprunts'=>$emprunts]);
    }
}
