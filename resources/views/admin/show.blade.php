@extends('admin.layout')

@section('main')

 @can('admin-only')
  <div class="admin-show">
    <h2>{{$article->title}}</h2>
    <h3>{{$article->ingress}}</h3>
    <p>{{$article->text}}</p>
    <a class="btn" href="{{ url()->current() }}/edit">Redigera</a>
  </div>
  @endcan

@endsection
