@extends("layouts.admin_structure")

@section("description")
<span>La page de création de catégories de produits</span>
@endsection

@section("title")
Page de création de catégories de produits - We Fashion
@endsection

@section('content')
<div class="container" style="margin: 25px auto">
    <form action="{{ route("store_category") }}" method="post" enctype="multipart/form-data" style="height: 355px ;">
        <h1 class="welcome_msg col-10">Créer un nouvelle catégorie</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Entrez le nom du produit" name="name">
            <label for="floatingInput">Entrez le nom de la catégorie</label>
        </div>
        <div class="form-floating" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Entrez la description de la catégorie</label>
        </div>
        
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sex">
                <option selected disabled>Cliquez pour sélectionner le sexe concerné</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
            <label for="floatingSelect">Sélectionnez le sexe concerné</label>
        </div>
        
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Cliquez pour sélectionner le statut de la catégorie</option>
              <option value="sold">Sold</option>
              <option value="normal">Normal</option>
            </select>
            <label for="floatingSelect">Sélectionnez le sexe concerné</label>
        </div>
        
        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button class="btn btn-primary" type="submit"><span>Créer la catégorie</span></button>
        </div>
</form>
</div>
</div>
@endsection