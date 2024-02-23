@extends('./../layouts/app')

@section('page-content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
            <div class="card">
                  <div class="card-body">
                    <form method="post" action="{{ route('registration') }}" class="form-product">
                        @method('post')
                        @csrf
                        <h4>Nouvel Utilisateur</h4>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control mt-1" name="nom" placeholder="Nom de l'utilisateur"
                                value={{ old('nom') }}>
                            @error('nom')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control mt-1" name="email" placeholder="Email de l'utilisateur"
                                value={{ old('email') }}>
                            @error('email')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control mt-1" name="password" placeholder="Mot de passe de l'utilisateur">
                            @error('password')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Inscription</button>
                    </form>
                    <p>Déjà un utilisateur ? <a href="#">Connectez-vous</a></p>
                  </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
