@extends("layouts.user_structure")

@section("description")
<span>Aricles pour {{ $sex }} </span>
@endsection

@section("title")
Articles pour {{ $sex }} - We Fashion
@endsection

@section('content')
<div class="container">
<h1 class="welcome_msg">Articles pour {{ $sex }}</h1>
<div class="row">
@forelse ($products as $product)
<div class="col-4">
<ul>
    <li>{{$product->name}}</li>
    <li>{{$product->price}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->visibility}}</li>
    <li>{{$product->condition}}</li>
    <li>{{$product->reference}}</li>
    </div>
</ul>
@empty
<span style="margin-bottom: 291px">Aucun article pour {{ $sex }} disponible !</span>
@endforelse
<div class="d-flex justify-content-center">
  {{-- {{ $products->links() }} --}}
</div>
</div>
</div>
@endsection