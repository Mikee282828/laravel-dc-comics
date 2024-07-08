<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'books' => Comic::all()
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComicbook = new Comic();
        $newComicbook->title = $data['title'];
        $newComicbook->description = $data['description'];
        $newComicbook->price = $data['price'];
        $newComicbook->save();

        return(redirect()->route('comics.show',$newComicbook->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $data = [
            'books' => $comic
        ];
        return view('comics.show', $data);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ['book'=> Comic::find($id)];
        return view('comics.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $editItem)
    {
        $data = $request->all();

        $editItem->title = $data['title'];
        $editItem->description = $data['description'];
        $editItem->price = $data['price'];
        $editItem->save();

        return(redirect()->route('comics.show',$editItem->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
