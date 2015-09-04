@extends('template')

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ dateBr($post->created_at) }} Por <a href="#">{{ $post->user->name }}</a></p>

        <p class="text-justify blog-post-content">{{$post->post}}</p>
        <p class="text-left">
            <small>
                Tag:
                @foreach($post->tags as $tag)
                    {{ $tag->name }}
                @endforeach
            </small>
        </p>
        <div class="container">
            <div class="row jumbotron">
                <h3>Deixe um comentário</h3><br>
                <div class="col-md-12 row-left">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::model($post, ['route' => ['post.comment', $post->id], 'method' => 'post']) !!}
                    @include('posts._form')
                    <div class="form-group pull-right">
                        {!! Form::submit('Comentar', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <h3 class="page-header row-left">Comentários <span class="badge badge-info">{{ $post->comments->count() }}</span></h3>
            <div class="comment-style row-left">
                @foreach($post->comments as $comment)
                    <h4>{{ $comment->name }} <small>{{ dateBr($comment->created_at) }}</small></h4>
                    <small>{{ $comment->comment }}</small>
                    <hr/>
                @endforeach
            </div>
        </div>
    </article>
@endsection