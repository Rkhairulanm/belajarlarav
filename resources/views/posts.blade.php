@extends('layouts.main')

@section('container')
    <article class="py-5">
        <h2>{{$post["title"]}}</h2>
        <h5>{{$post["author"]}}</h5>
        <p>{{$post["body"]}}</p>
    </article>
    <button><a href="/post">Back</a></button>
@endsection
