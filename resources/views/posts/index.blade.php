@extends('template')

@section('content')

    @foreach($posts as $post)
        <article class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>

            <p class="blog-post-meta">{{ dateBr($post->created_at) }} Por {{ $post->user->name }}</p>

            <p class="text-justify">{{ str_limit($post->post, 200) }}</p>

            <p class="text-right">
                <a class="btn btn-link btn-sm" href="{{ route('post.single', ['id' => $post->id, 'title' => str_slug($post->title)]) }}" role="button">
                    continuar lendo...</a>
            </p>
            <p class="text-left">
                <small>
                    Tag:
                    @foreach($post->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                </small>
            </p>
            <hr>
        </article><!--/.Post-Blog-->
    @endforeach
    <ul class="pager">
        @if($posts->previousPageUrl())
            <li class="previous">
                <a href="{!! $posts->previousPageUrl() !!}">&larr; Anterior</a>
            </li>
        @endif
        @if($posts->nextPageUrl())
            <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">Próximo &rarr;</a>
            </li>
        @endif
    </ul>

@endsection