@extends("layouts.admin_structure")

@section("description")
<span>La page de modification de catégorie</span>
@endsection

@section("title")
Page de modification de catégorie - We Fashion
@endsection

@section('content')
<div class="container" style="margin: 25px auto">
    <h1 class="welcome_msg col-10">Modifier la catégorie</h1>
    <form action="{{ route("update_category", $categories->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        N.B : Cliquez pour modifier le champ <br>
        <div class="form-floating mb-3 form">
            <input type="text" class="form-control" id="floatingInput" value="{{ $categories->name }}" placeholder="Entrez le nom de la catégorie" name="name">
            <label for="floatingInput">Nom :</label>
        </div>
        <div class="form-floating" style="margin-bottom: 15px">
            <textarea class="form-control" placeholder="Entrez la description du produit" style="height: 100px" name="description">{{ $categories->description }}</textarea>
            <label for="floatingTextarea2">Description : {{ $categories->description }}</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Etat : {{ $categories->sex }}</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <label for="floatingSelect">Modifiez l'état de la catégorie</label>
        </div>
        <div class="form-floating form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="condition">
                <option selected disabled>Etat : {{ $categories->condition }}</option>
                <option value="sold">Sold</option>
                <option value="standard">Standard</option>
            </select>
            <label for="floatingSelect">Modifiez l'état de la catégorie</label>
        </div>
        
        <input type="file" class="form-control" id="floatingPassword">
        
        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button class="btn btn-primary" type="submit"><span>Modifier le produit</span></button>
        </div>
    </form>
</div>
</div>
@endsection