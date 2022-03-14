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
</div>   
@endsection