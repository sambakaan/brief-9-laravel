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


    <div class="container " style="margin-top: 80px">
        <div class="row mt-5">
            <div class="col">
                <form method="post" action="{{ route('entreprises.index') }}">
                @csrf
                  <div class="mb-3">
                    <label for="nomEte" class="form-label">Nom Ete</label>
                    <input type="text" class="form-control" id="nomEte" name="nom" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="siegeEte" class="form-label">Siège</label>
                    <input type="text" class="form-control" name="siege" id="siegeEte">
                  </div>
                <div class="mb-3">
                    <label for="telephoneEte" class="form-label">Télphone</label>
                    <input type="text" class="form-control" name="telephone" id="telephoneEte">
                  </div>
                <div class="mb-3">
                    <label for="dateEte" class="form-label">Date de Création</label>
                    <input type="date" class="form-control" name="dateCreation" id="dateEte">
                  </div>
                <div class="mb-3">
                    <label for="registreEte" class="form-label">Registre</label>
                    <input type="text" class="form-control"  name="registre" id="registreEte">
                  </div>
                 <div class="mb-3">
                    <label for="nineaEte" class="form-label">Ninea</label>
                    <input type="text" class="form-control" name="ninea" id="nineaEte">
                  </div>
                <div class="mb-3">
                    <label for="siteEte" class="form-label">Site Web</label>
                    <input type="text" class="form-control" name="siteWeb" id="siteEte">
                  </div>
                <div class="mb-3 form-check">
                    <input type="checkbox"  name="dispositifFormation" class="form-check-input" id="dispositif">
                    <label class="form-check-label" for="dispositif">Avez-vous un Dispositif de formation ?</label>
                  </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="organigramme" id="organigramme">
                    <label class="form-check-label" for="dispositif">Avez-vous un organigramme ?</label>
                  </div>
                 <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="contrat" id="contrat">
                    <label class="form-check-label" for="dispositif">Avez-vous des contrats ?</label>
                  </div>

                <select class="form-select" name="quartier_id" aria-label="list des régions">
                  <option selected>Sélectionner la localité</option>
                    @foreach ($quartiers as $quartier)
                      <option value="{{ $quartier->id }}">{{ $quartier->nom }}</option>
                    @endforeach
                </select>


                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>

</main>
  </body>
</html>
