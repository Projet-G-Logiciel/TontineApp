<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remboursement;
use Illuminate\Support\Facades\Auth;

class RemboursementController extends Controller
{
    public function show()
    {
        $user=Auth::id();
        $rembouserment = Remboursement::join('users','users.id','=','remboursements.user_id')->select('remboursements.*','users.name')->where('user_id', $user)->get();
        return view('remboursement',['remboursements'=>$rembouserment]);
    }
}
