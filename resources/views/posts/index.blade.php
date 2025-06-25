
<h1>aqui se mostrara todos los post</h1>
<a href="{{route('posts.create')}}">
    nuevo posts
</a>
<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{route('posts.show', $post)}}">
            {{$post->name}}

        </a>
    </li>

    @endforeach
</ul> 

{{$posts->links()}}
