@extends("layouts.user_structure")

@section("description")
<span>La page d'accueil de la boutique WE Fashion</span>
@endsection

@section("title")
Page d'accueil - We Fashion
@endsection

<div class="container-fluid">
  
  @section('content')
  <div class="container">
    <h1 class="welcome_msg">Des vêtements de marques pour vous démarquer</h1>
    <div class="row">
      @foreach($products as $product)
      <div class="col-4">
        <ul>
          <li><h1 class="welcome_msg"><a href="{{ route("product", $product->id) }}" style="color: #66eb9a; text-decoration: underline;">{{$product->name}}</a></h1></li>
          <li>Prix : {{$product->price}}</li>
          <li>Référence : {{$product->reference}}</li>
        </ul>
      </div>
      @endforeach
      <div class="d-flex justify-content-center">
        {{ $products->links() }}
      </div>
    </div>    
  </div>
    @endsection