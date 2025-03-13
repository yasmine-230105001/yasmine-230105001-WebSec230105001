@extends('layouts.master')

@section('title', 'Product Catalog')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Product Catalog</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <h6 class="text-primary">{{ $product['price'] }}</h6>
                        <button class="btn btn-success">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
