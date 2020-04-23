<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genre\StoreRequest;
use App\Http\Requests\Genre\UpdateRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::paginate(50);

        return view('layouts/admin/genres/index',compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/genres/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->all();
        Genre::create($data);

        return redirect()->route('admin.genres.index')->with('alert', 'Жанр успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param Genre $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Genre $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::find($id);

        return view('layouts/admin/genres/edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Genre $genre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Genre $genre): RedirectResponse
    {
        $save = Genre::find($genre->id);
        $save['name'] = $request['name'];
        $save->save();

        return redirect()->route('admin.genres.index')->with('alert', 'Жанр успешн обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::where('id',$id);
        $genre->delete();

        return redirect()->route('admin.genres.index')->with('alert', 'Жанр успешно удален!');
    }
}
