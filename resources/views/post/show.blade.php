@extends('layouts.index')
@section('content')
  <div>
    <div>{{$post->id}} {{$post->title}}</div>
    <div>{{$post->content}}</div>
    <div><a href="{{route('posts.edit', $post->id)}}">Редактировать</a></div>
    <form action="{{route('posts.delete', $post->id)}}" method="post">
      @csrf
      @method('delete')
      <input type="submit" value="Удалить" class="btn btn-danger">
    </form>
    <div><a href="{{route('posts.index')}}">Назад</a></div>  
  </div>
@endsection