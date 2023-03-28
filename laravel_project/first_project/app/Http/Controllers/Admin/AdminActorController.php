<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;

class AdminActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::get();
        return view('admin.actors.index', compact('actors')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('CREATE METHOD OF ACTORS');
        return view('admin.actors.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActorRequest $request)
    {
        Actor::create($request->all());
        return to_route('admin.actors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        // echo "Actor";
        return view('admin.actors.edit', compact('actor')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        $actor->fill($request->all())->save();
        return to_route('admin.actors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
