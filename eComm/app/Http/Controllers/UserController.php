<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first(); 
        // return $user->password;
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or Password incorrect";
        }
        else{
            $req->session()->put('user',$user);
            return redirect("/");
        }
    }

    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
        $user->name = $req->input()["name"];
        $user->email = $req->input()["email"];
        
        $user->password = Hash::make($req->input()["password"]);
        // return $user;
        $user->save();
        return redirect('/login');
    }

    

}
