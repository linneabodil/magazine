@extends('shell')

    @section('content')
        <div class="articles">
          <div class="category">
            <h2>Träning</h2>
          </div>
            @foreach($items as $item)
            <div class="article">
              <a href="{{ url('/') }}/articles/{{ $item->id }}">
                <h2>{!! substr($item->title, 0, 200) !!}</h2>
                <h3>{!! substr($item->ingress, 0, 200) !!}</h3>
                <p>{!! substr($item->text, 0, 200) !!}</p>
              </a>
            </div>
            @endforeach
        </div>
    @endsection
