<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
}
