@extends('./../layouts/app')

@section('page-content')
    <div class="row mt-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h4>Editer l'article</h4>
                    <form action="/articles/{{ $article->id }}/update" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="titre" class="form-control" value="{{ $article->titre }}">
                        <textarea class="form-control mt-2" name="description" cols="30" rows="10"
                        >{{ $article->description }}"</textarea>
                        <div class="buttons">
                                <button class="btn btn-success mt-2" type="submit">Actualiser</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
