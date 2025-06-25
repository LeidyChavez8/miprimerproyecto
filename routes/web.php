<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

Route::get('/', HomeController::class ); 

// Route:: get('/posts', [postController::class, 'index'])
//         ->name('posts.index');

// Route:: get('/posts/create', [postController::class, 'create'])
//         ->name('posts.create');

// Route::post('/posts',[postController::class,'store'])
//         ->name('posts.store');

// Route:: get('/posts/{post}', [postController::class,'show'])
//         ->name('posts.show');

// Route::get('/posts/{post}/edit',[postController::class,'edit'])
//         ->name('posts.edit');

// Route::put('/posts/{post}',[postController::class,'update'])
//         ->name('posts.update');

// Route::delete('/posts/{post}',[PostController::class,'destroy'])
//         ->name('posts.destroy');

Route::resource('posts', PostController::class);


// Route:: get( 'prueba', function(){
  
//   crear nuevo post registro
//   $post= new Post;

//    $post->name='nombrE dE pRueBa 4';
//    $post->content= 'contenido de prueba 4';
//    $post->categoria='categoria de prueba 4';

//    $post->save();

//    return $post;

    // $post = Post::find(1);
    // dd($post->is_active);
    
   
    //actualizar registros
    // $post = Post::where('name', 'nombre de prueba 1')
    //         ->first();

    // $post->content = 'desarollado web';
    // $post->save();
    // return $post;

    //listar todos los registros
    // $posts= Post::orderBy('categoria', 'asc')
    // ->select('id','name')
    // ->take(2)//cantidad de registros
    // ->get();//todos

    // return $posts;

    //eliminar registro
    // $post = Post::find(1);
    // $post->delete();
    // return "eliminado";
// });


