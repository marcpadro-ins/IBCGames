@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-primary">{{ $category->name }}</h1>
        
        @if ($jocs->isEmpty())
            <div class="alert alert-warning" role="alert">
                No hi ha jocs disponibles en aquesta categoria.
            </div>
        @else
            <div class="list-group">
                @foreach($jocs as $joc)
                    <a href="{{ route('game.show', $joc->id) }}" class="list-group-item list-group-item-action">
                        {{ $joc->name }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
