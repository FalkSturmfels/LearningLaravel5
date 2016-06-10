@extends('App')

@section('content')

    <h1>Write New Article</h1>

    <hr/>

    <!-- Title From Input -->
    {!! Form::open(['url'=>'articles']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Body From Input -->
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Article From Input -->
        <div class="form-group">
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control'])!!}
        </div>

    {!! Form::close() !!}

@stop