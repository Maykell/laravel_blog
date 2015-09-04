<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tag', 'Tag') !!}
    {!! Form::select('tag[]', $tags, null, ['class'=>'form-control', 'multiple' => 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('post', 'Post') !!}
    {!! Form::textarea('post', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>
