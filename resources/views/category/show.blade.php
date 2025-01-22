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
                    <a href="{{ route('game.show', $joc->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>{{ $joc->name }}</span>
                        <span>
                            @php $mitjana = round($joc->reviews->avg('rating')); @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="bi {{ $i <= $mitjana ? 'bi-star-fill text-warning' : 'bi-star text-secondary' }}"></i>
                            @endfor
                        </span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection