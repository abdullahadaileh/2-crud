@extends('layout')

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        <div class="card mt-3">
            <div class="card-header">
                {{ $product->product_name }}
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $product->product_description }}</p>
                <p><strong>Price:</strong> ${{ $product->product_price }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
