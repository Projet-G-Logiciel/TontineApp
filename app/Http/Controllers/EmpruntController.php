<?php

namespace App\Http\Controllers;
<<<<<<< Updated upstream

=======
use App\Models\Log;
>>>>>>> Stashed changes
use App\Models\Emprunt;

use App\Models\Notification;

use Illuminate\Http\Request;
use App\Models\Demande_emprunt;
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

<<<<<<< Updated upstream
        return back()->with('Emprunt Demander.');
    }
    public function show(){
=======
        $descriptionNotif = "Le membre ".Auth::user()->name." veux emprunter une somme de ".$demandeEmprunt->montant." pour ". $demandeEmprunt->objet ." c'est possible?";
        $notif = Notification::create([
            'description' => $descriptionNotif,
            'user_id' => Auth::user()->id,
        ]);
        $descLog = "Effectue une demande d'emprunt de  $request->montant_emprunter";
        $log = Log::create([
            'type_log'=>2,
            'log'=>$descLog,
            'user_id'=>Auth::user()->id,
         ]);
        // dd($descriptionNotif);

        return back()->with('Emprunt Demander.');
    }

    public function acceptEmprunt($montant, $id_user, $id)
    {
        $emprunt = Emprunt::create([
            'montant' => $montant,
            'status' => 1,
            'user_id' => $id_user
        ]);

        $demandeEmprunt=Demande_emprunt::find($id);
        $demandeEmprunt->status = 1;
        $demandeEmprunt->save();
        $descLog = "Accepte l'emprut de $demandeEmprunt->montant";
        $log = Log::create([
            'type_log'=>2,
            'log'=>$descLog,
            'user_id'=>Auth::user()->id,
         ]);
        return back()->with('Emprunt Enregistrer.');
    }

    public function refuserEmprunt($id)
    {
        $demandeEmprunt=Demande_emprunt::find($id);
        $demandeEmprunt->status = 2;
        $demandeEmprunt->save();
        $descLog = "Refuse un emprunt";
        $log = Log::create([
            'type_log'=>2,
            'log'=>$descLog,
            'user_id'=>$user->id,
        ]);
        return back()->with('Emprunt Refuser.');
    }

    public function show()
    {
>>>>>>> Stashed changes
        $emprunts = Emprunt::join('users','users.id','=','emprunts.user_id')->select('emprunts.*','users.name')->get();

        return view('emprunt',['emprunts'=>$emprunts]);
    }
}
