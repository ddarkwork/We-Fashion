@extends("layouts.user_structure")

@section("description")
    <span>La page d'accueil de la boutique WE Fashion</span>
@endsection

@section("title")
    Page d'accueil - We Fashion
@endsection

@section('content')

<h1>Bienvenue sur We Fashion</h1>

@foreach($products as $product)

<ul>
    <li>{{$product->name}}</li>
    <li>{{$product->price}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->visibility}}</li>
    <li>{{$product->condition}}</li>
    <li>{{$product->reference}}</li>
</ul>

@endforeach

@endsection