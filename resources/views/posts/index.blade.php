
<h1>aqui se mostrara todos los post</h1>
<ul>
    @foreach ($posts as $post)
    <li>
        <a href="/posts{{$post->category}}">
            {{$post->name}}

        </a>
    </li>

    @endforeach
</ul> 


