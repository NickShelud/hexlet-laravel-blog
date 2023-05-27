@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
    <h1>Название статьи</h1>
    @foreach($articles as $article)
        <a href="{{ route('articles.show', ['id' => $article->id]) }}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection