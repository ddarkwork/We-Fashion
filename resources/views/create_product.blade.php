@extends("layouts.admin_structure")

@section("description")
    <span>La page de création de produits</span>
@endsection

@section("title")
    Page de création de produits - We Fashion
@endsection

@section("content")
    <h1>Page de création de produits</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        {{-- Nom du produit --}}
        <div>
            <label for="name">Renseignez le nom du produit</label><br>
            <input type="text" name="name" id="name">
        </div><br>

        {{-- Description du produit --}}
        <div>
            <label for="description">Renseignez la description du produit</label><br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div><br>

        {{-- Catégorie du produit --}}
        <div>
            <label for="">Catégorie du produit</label><br>
            <select name="category">
                <option value="">Veuillez sélectionner une option</option>
                <option value="men">Hommes</option>
                <option value="women">Femmes</option>
            </select>
        </div><br>

        {{-- Prix du produit --}}
        <div>
            <label for="price">Renseignez le prix du produit</label><br>
            <input type="number" step="any" name="price" id="price">
        </div><br>

        {{-- Tailles disponible pour du produit --}}
        <div>
            <label for="">Taille(s) du produit</label><br>
            <input type="checkbox" id="xs">
            <label for="xs">XS</label>
            <input type="checkbox" id="s">
            <label for="s">S</label>
            <input type="checkbox" id="m">
            <label for="m">M</label>
            <input type="checkbox" id="l">
            <label for="l">L</label>
            <input type="checkbox" id="xl">
            <label for="xl">XL</label>
        </div><br>

        {{-- Visibilité du produit --}}
        <div>
            <label for="">Visibilité du produit</label><br>
            <select name="visibility">
                <option value="">Veuillez sélectionnez une option</option>
                <option value="publish">Publié</option>
                <option value="unpublished">Non publié</option>
            </select>
        </div><br>

        {{-- Etat du produit --}}
        <div>
            <label for="">Visibilité du produit</label><br>
            <select name="visibility">
                <option value="">Veuillez sélectionner une option</option>
                <option value="on_sale">En solde</option>
                <option value="standard">Standard</option>
            </select>
        </div><br>

        {{-- Référence du produit --}}
        <div>
            <label for="reference">Renseignez la référence du produit</label><br>
            <input type="text" name="reference" id="reference">
        </div><br>

        {{-- Upload d'image du produit --}}
        <div>
            <input type="file" name="picture">
        </div><br>

        <button type="submit">Enregistrer le produit</button>
    </form>
@endsection