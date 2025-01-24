@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="display-4 text-center mb-4">Jocs</h1>

    <div class="row">
        @foreach($games as $game)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center text-center">
                        <h5 class="card-title">{{ $game->name }}</h5>

                        @php 
                            $mitjana = $game->reviews->avg('rating') ?? 0;
                        @endphp
                        <div class="mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="bi {{ $i <= round($mitjana) ? 'bi-star-fill text-warning' : 'bi-star text-secondary' }}"></i>
                            @endfor
                            <small class="d-block text-muted">({{ number_format($mitjana, 1) }} / 5)</small>
                        </div>

                        <a href="{{ route('game.show', $game->id) }}" class="btn btn-primary w-100">
                            Jugar
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
