@extends('admin.layout')

@section('main')

    <div>
        <li>{{$article->title}}</li>
        <div>
            <p>{{$article->ingress}}</p>
            <p>{{$article->text}}</p>
        </div>
    </div>

@endsection