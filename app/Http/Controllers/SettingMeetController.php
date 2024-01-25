<?php

namespace App\Http\Controllers;
use App\Models\Seance;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SettingMeetController extends Controller
{
    public function setting()
    {
        return view('settingMeet');
    }

    public function settingStore(Request $request)
    {
        $i=0;
        // dd($_POST);
        foreach($_POST as  $key => $date)
        {
            if($key !='_token' && $key !='Valider')
            {
                $seances= Seance::create([
                    'dateSeance'=> $date
                ]);
            }
            $i++;
        };
        return view('settingMeet');
    }
}
    