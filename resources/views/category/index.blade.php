@extends('layout')

@section('content')
    <h1 class="mb-4">Categories</h1>
    <div class="list-group">
        @foreach($categories as $category)
            <a href="{{ route('category.show', $category->id) }}" class="list-group-item list-group-item-action">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
@endsection
