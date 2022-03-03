@extends('layouts.default')

@section('pageTitle', 'Homepage')

@section('mainContent')
<div class="jumbo"></div>

<div class="container-cards">
    <div class="current-series bg-primary text-white">
        current series
    </div>

    <div class="cards-box">
        <ul>
            @foreach($data as $comic)
                <li class="card-comic">
                    <img src="{{ $comic["thumb"]}}" alt="">
                    <div>{{ $comic["series"] }}</div>
                </li>
            @endforeach
          </ul>
    </div>

    <button class="load-more">load more</button>
</div>
@endsection