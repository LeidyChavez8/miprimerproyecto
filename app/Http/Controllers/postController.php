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
        $post = new Post();

        $post->name= $request->name;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts');
        
    }
     public function show ($post){  
        $post= Post::find($post); 
        
    return view('posts.show', compact('post'));
    }

    public function edit($post){
        $post= Post::find($post);
        return view('posts.edit', compact ('post'));
    }

    public function update(Request $request, $post){

        $post= Post::find($post);

        $post->name= $request->name;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function destroy($post){
        $post= Post::find($post);
        $post->delete();

         return redirect("/posts");

    }
}
//get:obtener múltiples resultados de una consulta a la base de datos
//post:enviar datos a un servidor con el propósito de crear o actualizar un recurso
//put:actualizar
//patch:actualizar
//delete:eliminar  