@extends('admin_template')

@section('content')
    <h3 class="page-header">Create a new Post</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}
    {!! Form::hidden('user_id', $user->id)!!}
        @include('admin.posts._form')
        <div class="form-group">
            {!! Form::submit('Criar', ['class'=>'btn btn-primary pull-right']) !!}
        </div>
    {!! Form::close() !!}
@endsection