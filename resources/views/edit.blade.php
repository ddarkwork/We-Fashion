@extends("layouts.admin_structure")

@section("description")
<span>La page de modification de produits</span>
@endsection

@section("title")
Page de modification de produits - We Fashion
@endsection

@section('content')
<div class="container" style="margin: 25px auto">
    <h1 class="welcome_msg col-10">Modifier le produit</h1>
    <form action="{{ route("update", $products->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        N.B : Cliquez pour modifier le champ <br>
        <div class="form-floating mb-3 form">
            <input type="text" class="form-control" id="floatingInput" value="{{ $products->name }}" placeholder="Entrez le nom du produit" name="name">
            <label for="floatingInput">Nom :</label>
        </div>
        <div class="form-floating" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Entrez la description du produit" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
            <label for="floatingTextarea2">Description : {{ $products->description }}</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" value="{{ $products->reference }}" placeholder="Entrez la référence du produit" name="reference">
            <label for="floatingPassword">Référence :</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <input type="number" class="form-control" id="floatingPassword" value="{{ $products->price }}" placeholder="Entrez le prix du produit" name="price">
            <label for="floatingPassword">Prix :</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Etat : {{ $products->condition }}</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
            <label for="floatingSelect">Modifiez l'état du produit</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="visibility">
                <option selected disabled>Visibilité : {{ $products->visibility }}</option>
                <option value="publié">publié</option>
                <option value="non publié">non publié</option>
            </select>
            <label for="floatingSelect">Modifiez la visibilité du produit</label>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword">
        
        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button class="btn btn-primary" type="submit"><span>Modifier le produit</span></button>
        </div>
    </form>
</div>
</div>
@endsection