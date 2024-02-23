@extends('layouts/app')

@section('page-content')
    <div class="card mt-5">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form method="post" action="articles" class="form-product">
                @method('post')
                @csrf
                <h4>Enrégister un Article</h4>
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" name="titre" placeholder="Titre de l'article"
                        value={{ old('titre') }}>
                    @error('titre')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Description de l'article"
                     value={{ old('description') }}></textarea>
                    @error('description')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>
    </div>
    <ul class="list-group mt-5">
        <h4>Articles disponibles</h4>
        @forelse ($articles as $article)
            <li class="list-group-item">
                <a href="{{ route('articles.show', $article->id) }}" class="title">{{$article->titre}}</a>
                <div class="description">{{$article->description}}</div>
            </li>
        @empty
        <p class="text text-info">Aucun Article trouvé</p>
        @endforelse
    </ul>
@endsection

