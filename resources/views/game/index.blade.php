@extends('layout')

@section('content')
    <h1 class="mb-4">Jocs</h1>
    <div class="list-group">
        @foreach($games as $game)
            <a href="{{ route('game.show', $game->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span>{{ $game->name }}</span>
                <span>
                    @php $mitjana = round($game->reviews->avg('rating')); @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="bi {{ $i <= $mitjana ? 'bi-star-fill text-warning' : 'bi-star text-secondary' }}"></i>
                    @endfor
                </span>
            </a>
        @endforeach
    </div>
@endsection
