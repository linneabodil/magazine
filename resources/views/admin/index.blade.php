@extends('admin.layout')

@section('main')

    <div>
        @foreach ($articles as $article)
            <li>{{$article->title}}</li>
            {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'post']) !!}
            {{ method_field('DELETE') }}
            @csrf
            <div>
                <input type="submit" value="Delete">
            </div>

            {!! Form::close()!!}
        @endforeach
    </div>


@endsection