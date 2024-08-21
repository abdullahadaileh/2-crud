@extends('layout')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_name">Name</label>
                <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
            </div>
            <div class="form-group">
                <label for="product_description">Description</label>
                <textarea name="product_description" class="form-control">{{ $product->product_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="product_price">Price</label>
                <input type="number" name="product_price" class="form-control" step="0.01" value="{{ $product->product_price }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
