@extends('layouts.app')
@section('content')
    <h1>Название статьи</h1>
    @foreach($articles as $article)
        <h2>{{$article->name}}</h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection