<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use  App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('accueil',[
            'articles'=>$articles
        ]);
    }

    public function store(Article $article, ArticleRequest $request){
        Article::create([
            'titre'=>$request->titre,
            'description'=>$request->description
        ]);

        return redirect()->back()->with('success', 'L\'article a été bien enrégistré');
    }

    // methode pour récupérer un unique article
    public function show($id){
        $article=Article::find($id);
        return view('articles.show',[
            'article'=>$article
        ]);
    }

    public function edit(Article $article){
        return view('articles.edit', [
            'article'=>$article
        ]);
    }
    public function update(Article $article, ArticleRequest $request){

        // la variable article permet de récupérer la vadiable dont on souhaite faire la mise à jour
        // la variable request récupère les données du formulaire

        $article->titre = $request->titre;
        $article->description = $request->description;

        $article->save();

        return redirect('/accueil')->with('success','L\'article a été modifié avec succès');

    }
    public function delete(Article $article){
        $article->delete();
        return redirect('/accueil')->with('success','L\'article a été supprimé avec succès');

    }
}
