@extends("layouts.admin_structure")

@section("description")
<span>Tableau de bord de la booutique We fashion</span>
@endsection

@section("title")
Tableau de bord - We Fashion
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="welcome_msg col-10">Tableau de bord</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn me-md-2" type="button">
                <a href="{{ route("create_product") }}">
                    <span>Créer un nouveau produit</span>
                </a>
            </button>
        </div> 
    </div>  
    
    <!-- LISTE DES PRODUITS -->
    <div class=col-md-12>
        <form id="form-list-client" action="" enctype="multipart/form-data">
            @csrf
            <legend>Liste des produits</legend>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <td>Nom</td>
                        <th>Description</th>
                        {{-- <th>Taille</th> --}}
                        <th>Référence</th>
                        <th>Statut</th>
                        <th>Visibilité</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @foreach($products as $product)
                <tbody id="form-list-client-body">
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        {{-- <td>{{$product->size}}</td> --}}
                        <td>{{$product->reference}}</td>
                        <td>{{$product->condition}}</td>
                        <td>{{$product->visibility}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a class="btn btn-default btn-sm" style="margin-bottom: 10px;" href="{{ route("edit_product", $product->id)}}"> <span> Editer </span> </a>
                            <a class="btn btn-default btn-sm" href="{{ route("delete", $product->id) }}"> <span> Supprimer </span> </a> 
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </form>
        {{ $products->links() }}
    </div>
</div>
@endsection