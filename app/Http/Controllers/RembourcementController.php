<?php

namespace App\Http\Controllers;

use App\Models\Remboursement;
use Illuminate\Http\Request;

class RembourcementController extends Controller
{
    public function show()
    {
        $rembous = Remboursement::all();
        return view('rembourssement',['rembourssements'=>$rembous]);
    }
}
