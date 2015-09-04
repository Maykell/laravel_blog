@extends('admin_template')

@section('content')
    <h3>Posts <a class="btn btn-success btn-sm" href="{{ route('admin.posts.create') }}" role="button">
            Novo Post</a></h3>

    <table class="table">
        <tr>
            <th>Código</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Tag</th>
            <th>Ação</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name}}</td>
            <td>{{ $post->title }}</td>
            <td>
                @if($post->tags)
                    @foreach($post->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                @endif
            </td>

            <td>
                <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Apagar</a>
                <a href="{{ route('post.single', ['id' => $post->id, 'title' => str_slug($post->title)]) }}" target="_blank" class="btn btn-info">Visualizar</a>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $posts->render() !!}

@endsection