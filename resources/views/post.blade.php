@extends('layouts.main')

@section('container')
    <article class="py-5">
        @foreach ($post as $k)
            <h2>
                <a href="/posts/{{$k["slug"]}}">{{ $k['title'] }}</a>
            </h2>
            <h5>{{ $k['author'] }}</h5>
            <p>{{ $k['body'] }}</p>
        @endforeach
    </article>
@endsection
 