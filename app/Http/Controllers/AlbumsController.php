<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Albums::all();
        return response(view('albums.album', compact('albums')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create-album');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $albums = new Album();
        $albums->albumName = $request->albumName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;
        $albums->cover = $request->cover;
        $albums->save();
        return redirect('/album');
    }

    /**
     * Display the specified resource.
     */
    public function show(Albums $albums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Albums $albums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Albums $albums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Albums $albums)
    {
        //
    }
}
