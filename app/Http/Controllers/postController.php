<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index (){
        $posts= Post::all();
    return view ('posts.index', compact('posts')); 
    }
    public function create(){
    return view ('posts.create');
    }
    public function show($post){
        $post= Post::fin($post);        
    return view('posts.show', compact('post'));
    }
}
