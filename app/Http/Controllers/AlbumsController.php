<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;
use Image;
use File;

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
        $request->validate([
            'albumName' => 'required|max:30',
            'year' => 'required|integer|min:1500|max:2023',
            'genre' => 'required|max:25',
            'coverName' => 'required|file|mimes:jpg,png,jpeg,map|max:64'
        ]);

        //'coverName' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;

        if ($request->hasFile('coverName'))
        {
            $imageData = file_get_contents($request->file('coverName'));
            $albums->coverName = $imageData;
        }
/*
        $albums = new Albums();
        $albums->albumName = $request->albumName;
        $albums->year = $request->year;
        $albums->genre = $request->genre;

        if ($request->hasFile('coverName'))
        {
            $filename = $request->coverName->getClientOriginalName();
            $path = $request->file('coverName')->storeAs('public/images', $filename);
            $albums->coverName = $filename;
        }*/


        $albums->save();
        
        //Albums::create($request->all());

        return redirect('/albums');
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
