<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('accueil') }}">CRUD LARAVEL</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('accueil') }}">Accueil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">Mes propres articles</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('registration') }}">Mon Compte</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                  </div>
                </div>
              </nav>
            @yield('page-content')
        </div>

    </body>
</html>
