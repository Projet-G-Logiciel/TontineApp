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
    public function export_log(){
        $logs = Log::join('users','users.id','=','logs.user_id')->select('logs.*','users.name','users.surname')->orderBy('logs.id','desc')->get();

        $liste = [];
        foreach ($logs as $log) {
            $liste[] = [$log->name,$log->surname,$log->log,$log->created_at];
        }
        $contenu = "";
        foreach ($liste as $ligne) {
            $contenu .= implode(",", $ligne) . "\n";
        }
        file_put_contents("logs.txt", $contenu);

        return response()->download("logs.txt");
    }
}
