@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_name">Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="product_description">Description</label>
                <textarea name="product_description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="product_price">Price</label>
                <input type="number" name="product_price" class="form-control" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
