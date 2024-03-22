<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function show(){
        $logs = Log::join('users','users.id','=','logs.user_id')->select('logs.*','users.name','users.surname')->orderBy('logs.id','desc')->get();
        // $logs = DB::table('logs')->orderBy('id','desc')->get();
      
        return view('logs',['logs'=>$logs]);
    }
}
