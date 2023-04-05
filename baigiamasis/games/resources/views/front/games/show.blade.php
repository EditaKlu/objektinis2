@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <h1>
            {{($game->title ?? '')}}
        </h1>
    </header>

    <div class="game-cards">
        <article class="single-game-card-wrapper">
            <img src="{{asset('storage/images/' . ($game->image ?? ''))}}">
            <header>
                <h2>
                    {{$game->name}}
                </h2>
            </header>

            <div class="game-card-body">
                <div class="game-card-description show-card-description">
                    {{ ($game->description ?? '') }}
                </div>
            </div>
        </article>
        <aside>
            <div>
                @foreach($game->images as $image)
                    <img src="{{asset('storage/images/' . ($image->name ?? ''))}}">
                @endforeach
            </div>
        </aside>
    </div>
</section>
@endsection