@extends("layouts.user_structure")

@section("description")
<span>Détails de ...</span>
@endsection

@section("title")
Page Produit - We Fashion
@endsection

@section('content')
<div class="container">
    <h1 class="welcome_msg">Des vêtements de marques pour vous démarquer</h1>
    <div class="row">
        <div class="col-4">
            <ul>
                <li><h1 class="welcome_msg" style="color: #66eb9a; text-decoration: underline;">{{ $product->name }}</h1></li>
                <li>Prix : {{$product->price}}</li>
                <li>Description : {{$product->description}}</li>
                <li>Offre : {{$product->condition}}</li>
                <li>Référence : {{$product->reference}}</li>
            </ul>
            <a class="btn btn-default btn-sm" style="margin-bottom: 10px;" href="{{ route("edit_product", $product->id)}}"> <span> Acheter </span> </a>
        </div>
    </div>   
</div>
@endsection