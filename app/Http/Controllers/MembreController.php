<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Http\Requests\StoreMembreRequest;
use App\Http\Requests\UpdateMembreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::all();
        return view('pages.membres.index',compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('pages.membres.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $store = new Membre();
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->image = $request->file('image')->hashName();
        Storage::put('public/', $request->file('image'));
        $store->genre_id = $request->genre_id;
        $store->save();
        return redirect('/membre');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembreRequest  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembreRequest $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }


    public function download(Membre $membre)
    {
        return Storage::download('public/'.$membre->image);
    }


}
