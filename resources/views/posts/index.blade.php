<x-app-layout>
    {{-- Contenido de la pagina principal posts --}}
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-">
            @foreach ($posts as $post)
                <article class="w-ful h-80 bg-cover bg-center rounded-lg @if($loop->first) col-span-2 @endif" style="background-image: url(@if($post->image) {{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }} text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-blue-100 leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
        
    </div>
</x-app-layout>
