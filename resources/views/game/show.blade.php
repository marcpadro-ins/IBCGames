@extends('layout')

@section('content')
    <h1>{{ $game->name }}</h1>
    <p>{{ $game->description }}</p>
    <p>Categoria: 
        @if($game->category)
            <a href="{{ route('category.show', $game->category_id) }}">{{ $game->category->name }}</a>
        @else
            Sense categoria
        @endif
    </p>

    <h2>Valoracions</h2>
    @if($game->reviews->count() > 0)
        @php
            $averageRating = $game->reviews->avg('rating');
        @endphp
        <p>Mitjana de valoracions: 
            @for ($i = 1; $i <= 5; $i++)
                <span style="color: {{ $i <= round($averageRating) ? '#f5b301' : '#ccc' }};">★</span>
            @endfor
            ({{ number_format($averageRating, 1) }} / 5)
        </p>
        <ul>
            @foreach($game->reviews as $review)
                <li>
                    <strong>{{ $review->user->name ?? 'Usuari desconegut' }}</strong>: 
                    @for ($i = 1; $i <= 5; $i++)
                        <span style="color: {{ $i <= $review->rating ? '#f5b301' : '#ccc' }};">★</span>
                    @endfor
                    <br>
                    <small>{{ $review->comment ?? 'Sense comentari' }}</small>
                </li>     
            @endforeach
        </ul>
    @else
        <p>Encara no hi ha valoracions per aquest joc.</p>
    @endif

    <h2>Afegeix una valoració</h2>
    @auth
        <form action="{{ route('review.store') }}" method="post">
            @csrf
            <input type="hidden" name="game_id" value="{{ $game->id }}">
            <div style="direction: rtl; display: inline-flex;">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" name="rating" value="{{ $i }}" id="star-{{ $i }}" style="display: none;">
                    <label for="star-{{ $i }}" style="font-size: 2em; cursor: pointer; color: #ccc;" 
                        onmouseover="highlightStars({{ $i }})"
                        onmouseleave="resetStars()"
                        onclick="setRating({{ $i }})">★</label>
                @endfor
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Deixa un comentari" name="comment" id="comment"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>
    @endauth

    @guest
        <p>Has d'iniciar sessió per a afegir valoracions</p>
        <p><a href="{{ route('login') }}">Iniciar sessió</a></p>
    @endguest

    <script>
        function highlightStars(n) {
            for (let i = 1; i <= 5; i++) {
                document.querySelector(`label[for=star-${i}]`).style.color = i <= n ? '#f5b301' : '#ccc';
            }
        }

        function resetStars() {
            const checked = document.querySelector('input[name="rating"]:checked');
            const rating = checked ? checked.value : 0;
            highlightStars(rating);
        }

        function setRating(n) {
            document.getElementById(`star-${n}`).checked = true;
        }
    </script>
@endsection
