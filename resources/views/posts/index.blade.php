
<h1>aqui se mostrara todos los post</h1>
<a href="/posts/create">nuevo posts</a>
<ul>
    @foreach ($posts as $post)
    <li>
        <a href="/posts/{{$post->id}}">
            {{$post->name}}

        </a>
    </li>

    @endforeach
</ul> 


