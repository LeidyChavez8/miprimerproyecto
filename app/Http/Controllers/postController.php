<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index (){
        $posts= Post::orderBy('id', 'desc')->paginate(10);
        
    return view('posts.index', compact('posts'));
    }
     public function create (){  
        
    return view('posts.create');
    }

    public function store(Request $request)  {
        //  return $request->all(); //mostrar los datos registrados
        $request->validate([
            'name' => 'required|min:10|max:255',
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index');
        
    }
     public function show (Post $post){    
        
    return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        
        return view('posts.edit', compact ('post'));
    }

    public function update(Request $request,Post  $post){
        $request->validate([
            'name' => 'required|min:10|max:255',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){
        
        $post->delete();

         return redirect()->route('posts.index');

    }
}
//get:obtener múltiples resultados de una consulta a la base de datos
//post:enviar datos a un servidor con el propósito de crear o actualizar un recurso
//put:actualizar
//patch:actualizar
//delete:eliminar  