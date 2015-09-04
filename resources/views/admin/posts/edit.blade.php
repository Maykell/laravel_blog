@extends('admin_template')

@section('content')
    <h3 class="page-header">Edit Post: {{ $post->title }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>

    @endif

    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put']) !!}
    {!! Form::hidden('user_id', $post->user->id)!!}
    @include('admin.posts._form')
    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary pull-right']) !!}
    </div>
    {!! Form::close() !!}


@endsection