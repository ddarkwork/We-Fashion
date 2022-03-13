@extends("layouts.admin_structure")

@section("description")
<span>La page de création de produits</span>
@endsection

@section("title")
Page de création de produits - We Fashion
@endsection

@section('content')
<div class="container" style="margin: 25px auto">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 form">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Entrez le nom du produit</label>
        </div>
        <div class="form-floating" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Entrez la description du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Entrez la référence du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Entrez le prix du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Cliquez pour sélectionner l'état du produit</option>
              <option value="">Sold</option>
              <option value="">Standard</option>
            </select>
            <label for="floatingSelect">Sélectionnez l'état du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected disabled>Cliquez pour sélectionner la visibilité du produit</option>
              <option value="1">publié</option>
              <option value="2">non publié</option>
            </select>
            <label for="floatingSelect">Sélectionnez la visibilité du produit</label>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword" placeholder="Password">
</form>
</div>
</div>
@endsection