@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="display-4 text-center mb-4">Categories</h1>
    
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary w-100">
                            Veure més
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
