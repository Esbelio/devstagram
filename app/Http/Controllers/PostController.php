<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        //dd($user->username);
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {
        //dd('hola');
       return view('post.create');
    }

    public function store(Request $request)
    {
        //dd('Creando Publicacion');
         $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
         ]);
/*
         Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
         ]);
*/
         //Otra Forma
         $post = new Post;
         $post->titulo = $request->titulo;
         $post->descripcion = $request->descripcion;
         $post->imagen = $request->imagen;
         $post->user_id = auth()->user()->id;
         $post->save();

         return redirect()->route('post.index', auth()->user()->username);
    }
}
