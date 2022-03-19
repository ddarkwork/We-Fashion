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
          <li>{{$product->name}}</li>
          <li>{{$product->price}}</li>
          {{-- <li>{{$product->description}}</li> --}}
          <li>{{$product->visibility}}</li>
          <li>{{$product->condition}}</li>
          <li>{{$product->reference}}</li>
        </ul>
      </div>
      @endforeach
      <div class="d-flex justify-content-center">
        {{ $products->links() }}
      </div>
    </div>    
  </div>
@endsection