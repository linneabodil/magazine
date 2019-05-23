@extends('admin.layout')

@section('main')

<div class="admin-edit">

  {!! Form::open(['route' => ['articles.update', $article->id], 'method' => 'post']) !!}
    {{ method_field('PATCH') }}
    @csrf

   <div class="form-group">
       {!! Form::label('title', 'Titel') !!}
       {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
       {!! Form::label('ingress', 'Ingress') !!}
       {!! Form::textarea('ingress', $article->ingress, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
       {!! Form::label('text', 'Brödtext') !!}
       {!! Form::textarea('text', $article->text, ['class' => 'form-control']) !!}
   </div>

  {!! Form::submit('Spara', ['class' => 'btn btn-info']) !!}
  {!! Form::close() !!}

</div>

@endsection
