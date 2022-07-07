<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index(){

        if(Auth::user()->current_team_id == '1'){
            return redirect()->route('dashboard');
        }
        elseif(Auth::user()->current_team_id == '2'){
            return redirect()->route('logistics');
        }
        elseif(Auth::user()->current_team_id == '3'){
            return redirect()->route('finance');
        }
        elseif(Auth::user()->current_team_id == '4'){
            return redirect()->route('core');
        }
        elseif(Auth::user()->current_team_id == '5'){
            return redirect()->route('hr');
        }



   }
}
