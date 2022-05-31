@extends('layouts.index')
@section('content')
  <div>
    <div>{{$post->id}} {{$post->title}}</div>
    <div>{{$post->content}}</div>
    <div><a href="{{route('posts.index')}}">Назад</a></div>  
  </div>
@endsection