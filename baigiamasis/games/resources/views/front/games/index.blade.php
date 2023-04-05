@extends('front.layouts.document')

@section('content')
<section>
    <header class="header-box">
        <img src="https://freepngimg.com/thumb/dice/90810-and-dice-d20-dungeons-system-dragons-black.png" alt="logo" style="width:128px;height:128px;">
        <h1>
            Game Club
        </h1>
    </header>
   
    <div class="game-cards">
        @foreach ($games as $game)
            <article class="game-card game-card-hover">
                <a href="{{route('front.games.show', $game)}}"></a>
                <header>
                    <img src="{{asset('storage/images/' . ($game->image ?? ''))}}">
                    <h3>
                        {{($game->title ?? '')}}
                    </h3>
                </header>
                <div class="game-card-body">
                    <div class="game-card-description">
                        {{ ($game->description ?? '') }}
                    </div>
                </div>
            </article>
        @endforeach

    </div>
</section>
@endsection