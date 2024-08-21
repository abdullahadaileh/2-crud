@extends('cat_layout')

@section('content')
    <h1>{{ $category->cat_name }}</h1>
    <p>{{ $category->cat_description }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
@endsection
