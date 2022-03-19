@extends("layouts.admin_structure")

@section("description")
<span>La page de création de catégories de produits</span>
@endsection

@section("title")
Page de création de catégories de produits - We Fashion
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="welcome_msg col-10">Tableau de bord</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn me-md-2" type="button">
                <a href="{{ route("create_product") }}">
                    <span>Créer une nouvelle catégorie</span>
                </a>
            </button>
        </div> 
    </div>  
    
    <!-- LISTE DES PRODUITS -->
    <div class=col-md-12>
        <form id="form-list-client" action="" enctype="multipart/form-data">
            @csrf
            <legend>Liste des catégories</legend>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <td>Nom</td>
                        <th>Description</th>
                        {{-- <th>Taille</th> --}}
                        <th>Sexe</th>
                        <th>Satut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @foreach($categories as $category)
                <tbody id="form-list-client-body">
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        {{-- <td>{{$product->size}}</td> --}}
                        <td>{{$category->sex}}</td>
                        <td>{{$category->condition}}</td>
                        <td>
                            <a class="btn btn-default btn-sm" style="margin-bottom: 10px;" href="{{ route("edit_product", $category->id)}}"> <span> Editer </span> </a>
                            <a class="btn btn-default btn-sm" href="{{ route("delete", $category->id) }}"> <span> Supprimer </span> </a> 
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </form>
        {{ $categories->links() }}
    </div>
</div>
@endsection