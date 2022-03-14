@extends("layouts.admin_structure")

@section("description")
<span>La page de création de produits</span>
@endsection

@section("title")
Page de création de produits - We Fashion
@endsection

@section('content')
<div class="container" style="margin: 25px auto">
    <h1 class="welcome_msg col-10">Créer un nouveau produit</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 form">
            <input type="text" class="form-control" id="floatingInput" placeholder="Entrez le nom du produit" name="name">
            <label for="floatingInput">Entrez le nom du produit</label>
        </div>
        <div class="form-floating" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Entrez la description du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Entrez la référence du produit" name="reference">
            <label for="floatingPassword">Entrez la référence du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="number" class="form-control" id="floatingPassword" placeholder="Entrez le prix du produit" name="price">
            <label for="floatingPassword">Entrez le prix du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Cliquez pour sélectionner l'état du produit</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
            <label for="floatingSelect">Sélectionnez l'état du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="visibility">
                <option selected disabled>Cliquez pour sélectionner la visibilité du produit</option>
                <option value="publié">publié</option>
                <option value="non publié">non publié</option>
            </select>
            <label for="floatingSelect">Sélectionnez la visibilité du produit</label>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword">
        
        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button class="btn btn-primary" type="button"><span>Créer le produit</span></button>
        </div>
    </form>
</div>
</div>
@endsection