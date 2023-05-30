@extends('layouts.app')

@section('content')
    <h2>{{$article->name}}</h2>
    <p>{{$article->body}}</p>
    <a href="{{ route('articles.edit', ['id'=>$article->id]) }}"><input type="submit" value="Edit"></a>
    <a href="{{ route('articles.destroy', ['id' => $article->id]) }}" data-confirm="Are you sure you want to delete the article?" data-method="delete" rel="nofollow">Delete</a>
@endsection