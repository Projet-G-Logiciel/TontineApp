<?php

namespace App\Http\Controllers;
use Notification;
use App\Models\Log;
use App\Models\User;
use App\Models\Profil;
use App\Models\Seance;
use App\Models\Emprunt;
use App\Models\Malheur;
use App\Models\Versement;
use App\Mail\passwordMail;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    
    public function listeProfil()
    {
        $profils=Profil::all();
        foreach ($profils as $value) {
            # code...
            $nombreMembre = User::where('users.profil_id',$value->id)->count();
        }
        $membres = Profil::join('users','profils.id','=','users.profil_id')->get();
        return View('membres.liste_profiles', [
            'profils'=>$profils,
            'membres'=>$membres,
            'nombreMembre'=> $nombreMembre,
        ]);
    }

//     public function home(){
//         $profils=Profil::all();
//         $membres = Profil::join('users','profils.id','=','users.profil_id')->get();
//         return view('dashboard', ['profils'=>$profils, 'membres'=>$membres]);
//     }
  
    //affiche la liste des membres
    public function liste_membre(){
        $profils=Profil::all();
        $membres = Profil::join('users','profils.id','=','users.profil_id')->get();
        return view('membres.liste_membre', ['profils'=>$profils, 'membres'=>$membres]);
    }

    //ajoute un membre
    public function add_membre(Request $request){
        $defaultPassword = Str::random(12,"0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        // dd($defaultPassword);
        $password = Hash::make($defaultPassword);
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'number'=>['required', 'integer'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'profil' => ['required', 'string', 'max:255']
        ]);
        $user = User::create([
            'name' => $request->nom,
            'surname' =>$request->prenom,
            'sex' =>$request->sexe,
            'number' =>$request->number,
            'email' => $request->email,
            'profil_id' =>$request->profil,
            'password' => $password,

        ]);

        $malheur1 = Malheur::create([
            'type'=>"Aide père",
            'user_id'=>$user->id
        ]);
        $malheur2 = Malheur::create([
            'type'=>"Aide mère",
            'user_id'=>$user->id
        ]);
        $descLog = "Ajout du membre $request->nom $request->prenom";
        $log = Log::create([
            'type_log'=>2,
            'log'=>$descLog,
            'user_id'=>$user->id,
        ]);
        Mail::to("$user->email")->send(new passwordMail($defaultPassword));
        return back()->with("Ajout reussi le mot de passe du membre lui a ete envoyer par mail");
    }

    //supprime un membre
    public function delete_membre($id){
        $user=User::find($id);
        $user->delete();
        $descLog = "Ajout du membre $user->nom $user->prenom";
        $log = Log::create([
            'type_log'=>0,
            'log'=>$descLog,
            'user_id'=>$user->id,
         ]);
        return back()->with('suppression reussie');
    }


    //Signaler un malheur
    public function Signaler_malheur(){
        $user=Auth::id();
        $malheurs=Malheur::where('user_id', $user)->get();
        return view('malheur.malheur', compact('malheurs'));
    }
    public function update_malheur(Request $request){
        $option1 = $request->input('option1');
        $option2 = $request->input('option2');
        $option3 = $request->input('option3');
        $user=Auth::id();
        $pere="aide père";
        $mere="aide mère";
        $log = Log::create([
            'type_log'=>2,
            'log'=>"Signale un malheur",
            'user_id'=>$user->id,
        ]);
        if ($option1 == 'on' ) {
            $malheur=Malheur::where('user_id', $user)->where('type', $pere)->update(['statut' => 1]);
           
            return back()->with('');
        }
        if ($option2 == 'on' ) {
            $malheur=Malheur::where('user_id', $user)->where('type', $mere)->update(['statut' => 1]);
            return back()->with('');
        }
         else {
            return back()->with('');
        }

    }
 //les rapports
  public function rapports(){
    $seances=Seance::all();

    // dd($seances);
    return view('rapports.rapports', ['seances'=> $seances]);
  }

  public function rapport_seance($id){
    $cotisations=Versement::join('users','users.id','=','versements.user_id')->select('versements.*','users.name')->where('seance_id', $id)->where('type', "Cotisation")->get();
    $epargnes=Versement::join('users','users.id','=','versements.user_id')->select('versements.*','users.name')->where('seance_id', $id)->where('type', "Epargne")->get();
    $emprunts=Emprunt::join('users','users.id','=','emprunts.user_id')->select('emprunts.*','users.name')->where('status', 1)->get();
    $log = Log::create([
        'type_log'=>2,
        'log'=>"Consultation du rapport de seance",
        'user_id'=>$user->id,
    ]);
    $seances=Seance::where('id', $id);// dd($cotisations);
    return view('rapports.rapport_seance', ['cotisations'=>$cotisations, 'epargnes'=>$epargnes, 'emprunts'=>$emprunts, 'seances'=>$seances]);
  }

  //logs
  //affiche la liste des membres
  public function liste_log(){
    $profils=Profil::all();
    $membres = Profil::join('users','profils.id','=','users.profil_id')->get();
    return view('logs.liste_log', ['profils'=>$profils, 'membres'=>$membres]);
    }

    
}
