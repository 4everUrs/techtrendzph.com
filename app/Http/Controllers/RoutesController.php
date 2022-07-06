<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RoutesController extends Controller
{
    public function index(){
       return view ('auth.adduser');
         
     }
     function addUser(Request $request){
         $user= new User;
         $user->name=$request->fname." ".$request->lname;
         $user->email=$request->email;
         $user->username=$request->username;
         $user->password=Hash::make ($request->password);
         $user->role=$request->roles;
         $user->department=$request->department;
        //  dd($user);
         $user->save();
         
         $this->attachTeam($user);
        //  dd($user);
         return redirect ('/admin/adduser');
     
     }
     function attachTeam(User $user){
          
             $team = Team::where('id','=',$user->department)->first();
                   
             $user->teams()->attach($team, array('role' => $user->role));
     
             $user->switchTeam($team);  
     
     }
}
