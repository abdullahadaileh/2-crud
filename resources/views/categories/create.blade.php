@extends('cat_layout')

@section('content')
    <h1>Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cat_name">Category Name:</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name" required>
        </div>
        <div class="form-group">
            <label for="cat_description">Category Description:</label>
            <textarea class="form-control" id="cat_description" name="cat_description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
