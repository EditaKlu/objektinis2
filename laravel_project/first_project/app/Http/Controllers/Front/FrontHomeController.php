<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
    // return view('front.home');
        return to_route('front.movies.index');
    }
}
