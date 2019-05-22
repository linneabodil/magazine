@extends('admin.layout')

@section('main')

{!! Form::open(['route' => ['articles.update', $article->id], 'method' => 'post']) !!}
    {{ method_field('PATCH') }}
    @csrf
 
 <div class="form-group">
     {!! Form::label('title', 'Namnet på ny title') !!}
     {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('ingress', 'ny ingress') !!}
     {!! Form::text('ingress', $article->ingress, ['class' => 'form-control']) !!}
 </div>
 
 <div class="form-group">
     {!! Form::label('text', 'ny text') !!}
     {!! Form::text('text', $article->text, ['class' => 'form-control']) !!}
 </div>

 {!! Form::submit('Uppdatera', ['class' => 'btn btn-info']) !!}

 {!! Form::close() !!}


@endsection