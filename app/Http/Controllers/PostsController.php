<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all(); // Mengambil semua isi tabel

        return view('posts.index', ['posts' => $posts, 'name' => 'Fikri']);
    }

    public function home(){
        $posts = Posts::all();
        return view('beranda', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Posts::all(); // Mengambil semua isi tabel
        return view('posts.create', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = $request->input('author');
        $judul = $request->input('judul');
        $konten = $request->input('konten');

        $posts = new Posts();
        $posts->author = $author;
        $posts->judul = $judul;
        $posts->konten = $konten;
        $posts->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('posts.edit', ['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Posts::find($id);
        $posts->update($request->all());

        // $posts->update([
        //     'author' => $request->author,
        //     'judul' => $request->judul,
        //     'konten' => $request->konten
        // ]);

        // Posts::where('id', $posts->id)
        //     ->update([
        //         'author' => $request->author,
        //         'judul' => $request->judul,
        //         'konten' => $request->konten
        //     ]);
        session()->flash('success', 'Postingan berhasil diupdate');
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::find($id)->delete();

        session()->flash('success', 'Postingan berhasil dihapus');
        return redirect('/posts');
    }
}