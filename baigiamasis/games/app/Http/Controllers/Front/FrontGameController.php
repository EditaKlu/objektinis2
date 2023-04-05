<?php

namespace App\Http\Controllers\Front;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontGameController extends Controller

{
    public function index(){
        $games = Game::get();
        return view('front.games.index', compact('games'));
    }

    public function show(Game $game)
    {
            return view('front.games.show', compact('game'));
    }
}
