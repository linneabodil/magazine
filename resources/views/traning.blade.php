@extends('shell')

    @section('content')
        <div class="articles">
          <div class="category">
            <h2>Träning</h2>
          </div>
            @foreach($items as $item)
            <div class="article">
                <h2>{!! substr($item->title, 0, 200) !!}</h2>
                <h3>{!! substr($item->ingress, 0, 200) !!}</h3>
                <p>{!! substr($item->text, 0, 200) !!}</p>
            </div>
            @endforeach
        </div>
    @endsection
