<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SeanceController extends Controller
{
    public function seance()
    {
        $dateDay=now()->format('Y-m-d');
        $dateSeance = Seance::where('dateSeance', '>', $dateDay)->first();
        // dd($seance);
        // dd($dateSeance);

        return view('seance',[
            'dateSeance' => $dateSeance,
        ]);
    }
}