<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">OSC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Entreprises</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Ajouter Ete</a>
          </li>
        </ul>
        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
</header>

<main>
    <div class="container" style="margin-top: 80px">
         <h2>Liste des entreprises</h2>
         <div class="row">
             <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                    <th scope="col">Siege</th>
                      <th scope="col">NInéa</th>
                        <th scope="col">Localité</th>
                        <th scope="col">Région</th>
                        <th scope="col">Détails</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($entreprises as $entreprise)
                        <tr>
                          <th scope="row">{{ $entreprise->id }}</th>
                          <td>{{ $entreprise->nom }}</td>
                         <td>{{ $entreprise->siege }}</td>
                          <td>{{ $entreprise->ninea }}</td>
                        <td>{{ $entreprise->localite->nom }}</td>
                            <td>{{ $entreprise->localite->commune->departement->region->nom }}</td>
                            <td>
                                <a href="{{ route('entreprises.show',$entreprise) }}">plus d'informations</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
         </div>
     </div>
</main>
  </body>
</html>
