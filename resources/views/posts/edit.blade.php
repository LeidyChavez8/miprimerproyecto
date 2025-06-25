<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>aqui se mostrara el formulario para editar</h1>
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
    <label>
        Nombre:
        <input type="text" name= "name" value="{{$post->name}}">
    </label>
    <br>
    <br>

     <label>
        slug:
        <input type="text" name= "slug" value="{{$post->slug}}">
    </label>
    <br>
    <br>

    <label>
        categoria:
        <input type="text" name= "category" value="{{$post->category}}">
    </label>
    <br>
    <br>

    <label>
        Contenido:
    <textarea name="content">{{$post->content}}
    </textarea>
    </label>
    <br>
    <br>

    <button type="submit">
        actualizar posts
    </button>
</body>
</html>