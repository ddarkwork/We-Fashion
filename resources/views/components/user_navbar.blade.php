<div class="container">
  <div class="row align-items-start">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a href="{{ route("home") }}" class="logo"><span style="color: #66eb9a">We Fashion</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route("sold") }}"><span class="nav_item">Soldes</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('sex', 'femme') }}"><span class="nav_item">Femme</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('sex', 'homme') }}"><span class="nav_item">Homme</span></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Rechercher un article" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</div>