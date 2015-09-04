@extends('admin_template')

@section('content')
    <h3 class="page-header">Edit Tag: {{ $tag->name }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>

    @endif

    {!! Form::model($tag, ['route' => ['admin.tags.update', $tag->id], 'method' => 'put']) !!}
    @include('admin.tags._form')
    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


@endsection