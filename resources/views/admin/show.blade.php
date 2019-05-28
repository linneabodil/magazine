@extends('admin.layout')

@section('main')

  <div class="admin-show">
    <h2>{{$article->title}}</h2>
    <h3>{{$article->ingress}}</h3>
    <p>{{$article->text}}</p>
    <a class="btn" href="{{ url()->previous() }}">Gå tillbaka</a>
    @can('admin-only')
      <a class="btn" href="{{ url()->current() }}/edit">Redigera</a>
    @endcan
  </div>

@endsection
