@extends('shell')

    @section('content')
        <!-- <inredning-view></inredning-view> -->
        <div class="articles">
            @foreach($items as $item) 
            <div class="article"> 
                <h2>{!! substr($item->title, 0, 200) !!}</h2>
                <p>{!! substr($item->text, 0, 200) !!}</p>
                <h3>{!! substr($item->rank, 0, 2) !!} {!! substr($item->category_id, 0, 2) !!}</h3>
            </div>
            @endforeach
        </div>
    @endsection
