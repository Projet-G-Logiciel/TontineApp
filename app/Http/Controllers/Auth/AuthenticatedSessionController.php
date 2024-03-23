<?php

namespace App\Http\Controllers\Auth;


use App\Models\Log;
use App\Models\User;
use App\Mail\codeMail;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
       
        // $request->session()->regenerate();
        $code = random_int(111111, 999999);
       
        $user = Auth::user();
        $user->code = $code;
        $user->save();
        $log = Log::create([
           'type_log'=>1,
           'log'=>"Demande d'authentification attente de verification du code",
           'user_id'=>$user->id,
        ]);
        Mail::to($user->email)->send(new codeMail($code));

        Auth::logout();
        return redirect()->route('code',['id'=>$user->id]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
