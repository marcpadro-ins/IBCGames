@extends('layout')

@section('content')
    <h1 class="mb-4">Jocs</h1>
    <div class="list-group">
        @foreach($games as $game)
            <a href="{{ route('game.show', $game->id) }}" class="list-group-item list-group-item-action">
                {{ $game->name }}
            </a>
        @endforeach
    </div>
@endsection