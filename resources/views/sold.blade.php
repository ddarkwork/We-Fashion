@extends("layouts.user_structure")

@section("description")
    <span>Liste des articles en solde</span>
@endsection

@section("title")
    Articles en solde - We Fashion
@endsection

@section("content")
<div class="container">
    <h1 class="welcome_msg">Articles en soldes</h1>
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