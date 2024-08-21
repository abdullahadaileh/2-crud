@extends('cat_layout')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cat_name">Category Name:</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ $category->cat_name }}" required>
        </div>
        <div class="form-group">
            <label for="cat_description">Category Description:</label>
            <textarea class="form-control" id="cat_description" name="cat_description">{{ $category->cat_description }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
