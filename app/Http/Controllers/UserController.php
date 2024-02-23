<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }
    public function handleRegistration(User $user ,createUserRequest $request){
        $user->name=$request->nom;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

        return redirect()->route('accueil')->with('success', 'Le compte a été crée avec succès. Connectez-vous ');
    }
    public function login(){
        return view('users.login');
    }

    public function handleLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return redirect()->back()->with('error', 'Information de connexion non reconnue');
        }
    }


    public function dashboard(){
        return view('dashboard');
    }
}
