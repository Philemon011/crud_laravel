@extends('./../layouts/app')

@section('page-content')
    <div class="card mt-5">
        <div class="card-body">
            <a href="/accueil">retour</a>
            <div class="title">{{ $article->titre}}</div>
            <p>{{ $article->description}}</p>
            <p>créé le : {{ $article->created_at}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Editer</a>

            <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
    </div>

@endsection
