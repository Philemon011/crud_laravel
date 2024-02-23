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
        dd($user);
    }
}
