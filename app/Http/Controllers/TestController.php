<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function methode1($userName){
        return "ceci est la première methode ".$userName;
    }

    public function example(){
        return 'ceci est un exemple';
    }

    public function bonjour($nom){
        return 'Bonjour '.$nom;
    }

    public function afficherApropos(){
        $nomdepapa='papa';
        return view('apropos', [
            'nom'=>$nomdepapa
        ]);
    }

    public function ok(){
        return view('ok');
    }

    public function functA(){
        $nomUser='John-Doe';
        $numero=['1','2','3','4'];
        return view('boss',[
            'nom'=>$nomUser,
            'age'=> 55,
            'produit'=>'',
            'nums'=> $numero
        ]);
    }

    public function afficherAccueil(){
        return view ('accueil');
    }


    public function store(validateFormRequest $request){
        // dd($request);
        $verif=$request;
        if ($verif) {
            echo 'oklm';
        }else{
            return redirect()->back();
        }

    }
}
