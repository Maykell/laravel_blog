@extends('admin_template')

@section('content')
    <h3 class="page-header">Create a new Tag</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'admin.tags.store', 'method' => 'post']) !!}
        @include('admin.tags._form')
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection