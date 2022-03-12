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
          <li>{{$product->name}}</li>
          <li>{{$product->price}}</li>
          {{-- <li>{{$product->description}}</li> --}}
          <li>{{$product->visibility}}</li>
          <li>{{$product->condition}}</li>
          <li>{{$product->reference}}</li>
        </ul>
      </div>
      @endforeach
    </div>    
    @endsection
    </div>