@extends('layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Product List</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        </div>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                {{ $message }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-info">View</a>
                            <a href="{{route('products.edit' , $product->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('products.destroy' , $product->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
