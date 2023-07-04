<div>
    @if ($post->count())


    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($post as $p)
            <div>
                <a href="{{route('post.show', ['post'=> $p, 'user'=> $p->user])}}">
                    <img src="{{asset('uploads'). '/' . $p->imagen}}" alt="Imagen del post: {{$p->titulo}}">
                </a>
            </div>
        @endforeach
    </div>


    @else
        <p class="text-center">No hay Post, sigue a alguien para poder ver sus Posts</p>
    @endif
</div>