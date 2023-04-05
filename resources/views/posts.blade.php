<x-layout>
    @foreach($posts as $post)
    <article>
        <h1>
            <a href="/post/{{ $post->slug }}">
                {!! $post->title !!}
            </a>
        </h1>

        <p>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->excerpt !!}
        </div>

    </article>
    @endforeach
    <a href="/">Go Back</a>
</x-layout>