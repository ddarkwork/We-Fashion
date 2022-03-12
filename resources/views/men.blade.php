@extends("layouts.user_structure")

@section("description")
    <span>Liste des articles pour hommes</span>
@endsection

@section("title")
    Articles pour Hommes - We Fashion
@endsection

@section('content')

@foreach($products as $product)

<ul>
    <li>{{$product->name}}</li>
    <li>{{$product->price}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->visiblity}}</li>
    <li>{{$product->condition}}</li>
    <li>{{$product->reference}}</li>
</ul>

@endforeach

@endsection