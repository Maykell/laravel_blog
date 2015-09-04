@extends('admin_template')

@section('content')
    <h3>Tags <a class="btn btn-success btn-sm" href="{{ route('admin.tags.create') }}" role="button">
            Nova Tag</a></h3>

    <table class="table">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Acão</th>
        </tr>
        @foreach($tags as $tag)
        <tr>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}</td>
            <td>
                <a href="{{ route('admin.tags.edit', ['id' => $tag->id]) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('admin.tags.destroy', ['id' => $tag->id]) }}" class="btn btn-danger">Apagar</a>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $tags->render() !!}

@endsection