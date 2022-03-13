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
                <a class="nav-link active" aria-current="page" href="{{ route("admin") }}"><span class="nav_item">Produits</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><span class="nav_item">Catégories</span></a>
              </li>
            </ul>
            <div class="d-flex">
              <a class="nav-link active" aria-current="page" href="{{ route("home") }}"><span class="nav_item">Partie client</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>