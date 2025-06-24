<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pag ljco |posts</title>
</head>

<body>
    <a href="/posts">Volver a posts</a>

    <h1>Titulo: {{$post->name}}</h1>
   <p>
    <b>Categoria: </b>{{$post->category}}
   </p>

   <p>
    {{$post->content}}
   </p>

   <a href="/posts/{{$post->id}}/edit">
    editar post
   </a>

   <form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">
        Eliminar post
    </button>
   </form>
  
</body>

</html>
