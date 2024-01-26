<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function show(){
        $emprunts = Emprunt::join('users','users.id','=','emprunts.user_id')->select('emprunts.*','users.name')->get();

        return view('emprunt',['emprunts'=>$emprunts]);
    }
    
}
