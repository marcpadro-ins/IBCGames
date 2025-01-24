@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h1 class="display-4 text-center mb-4">{{ $game->name }}</h1>

        <!-- Requadre de joc -->
        <div class="d-flex justify-content-center align-items-center border rounded bg-light mb-4"
            style="height: 300px; width: 100%; position: relative;">
            <i class="bi bi-play-circle text-secondary" style="font-size: 5rem;"></i>
        </div>

        <p class="lead">{{ $game->description }}</p>
        
        <p><strong>Categoria:</strong> 
            @if($game->category)
                <a href="{{ route('category.show', $game->category_id) }}" class="text-decoration-none text-primary">
                    {{ $game->category->name }}
                </a>
            @else
                <span class="text-muted">Sense categoria</span>
            @endif
        </p>
    </div>

    <div class="mt-5">
        <h2 class="mb-3">Valoracions</h2>
        
        @if($game->reviews->count() > 0)
            @php
                $averageRating = round($game->reviews->avg('rating') ?? 0, 1);
            @endphp
            <p class="mb-3">
                <strong>Mitjana de valoracions:</strong> 
                @for ($i = 1; $i <= 5; $i++)
                    <i class="bi 
                        @if($i <= floor($averageRating)) bi-star-fill text-warning 
                        @elseif($i - 0.5 == $averageRating) bi-star-half text-warning 
                        @else bi-star text-secondary 
                        @endif"></i>
                @endfor
                <span class="text-muted">({{ number_format($averageRating, 1) }} / 5)</span>
            </p>

            <ul class="list-group">
                @foreach($game->reviews as $review)
                    <li class="list-group-item">
                        <strong>{{ $review->user->name ?? 'Usuari desconegut' }}</strong>:
                        @php
                            $reviewRating = round($review->rating ?? 0, 1);
                        @endphp
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="bi 
                                @if($i <= floor($reviewRating)) bi-star-fill text-warning 
                                @elseif($i - 0.5 == $reviewRating) bi-star-half text-warning 
                                @else bi-star text-secondary 
                                @endif"></i>
                        @endfor
                        <br>
                        <small class="text-muted">{{ $review->comment ?? '' }}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-warning" role="alert">
                Encara no hi ha valoracions per aquest joc.
            </div>
        @endif
    </div>

    @auth
    <div class="mt-5">
        <h2 class="mb-3">Afegeix una valoració</h2>

        <form action="{{ route('review.store') }}" method="post" class="p-4 border rounded shadow-sm">
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

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Deixa un comentari" name="comment" id="comment" style="height: 75px;"></textarea>
                <small class="text-muted fst-italic">Opcional</small>
            </div>

            <button type="submit" class="btn btn-primary w-100" id="botoEnviar" disabled>Enviar</button>
        </form>
    </div>
    <br>
    @endauth

    @guest
    <div class="mt-4 text-center">
        <p>Has d'iniciar sessió per a afegir valoracions.</p>
        <a href="{{ route('login') }}" class="btn btn-outline-primary">Iniciar sessió</a>
    </div>
    <br>
    @endguest
</div>

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
        habilitarBoto();
    }

    function habilitarBoto() {
        document.getElementById("botoEnviar").disabled = false;
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('input[name="rating"]').forEach(input => {
            input.addEventListener("change", habilitarBoto);
        });
    });
</script>
@endsection
