@extends('layouts.app')

@section('content')
    <h2>{{$article->name}}</h2>
    <p>{{$article->body}}</p>
    <a href="{{ route('articles.edit', ['id'=>$article->id]) }}"><input type="submit" value="Edit"></a>
@endsection