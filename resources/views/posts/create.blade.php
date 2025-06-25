<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pag ljco| posts</title>
</head>

<body>
    <h1>aqui se mostrara el formulario para crear</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        
    <label>
        Nombre:
        <input type="text" name= "name">
    </label>
    <br>
    <br>

     <label>
        slug:
        <input type="text" name= "slug">
    </label>
    <br>
    <br>

    <label>
        categoria:
        <input type="text" name= "category">
    </label>
    <br>
    <br>

    <label>
        Contenido:
    <textarea name="content" id=""></textarea>
    </label>
    <br>
    <br>

    <button type="submit">
        crear posts
    </button>
</body>

</html>
