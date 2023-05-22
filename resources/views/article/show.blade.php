@extends('layouts.app')

@section('content')
    <h2>{{$article->name}}</h2>
    <p>{{$article->body}}</p>
@endsection