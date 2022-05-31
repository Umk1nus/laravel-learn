@extends('layouts.index')
@section('content')
  <div>
    <a href="{{route('post.create')}}" class="btn btn-primary m-3">Создать пост</a>
  </div>
  @foreach ( $posts as $post )
    <div>
      <a href="{{route('posts.show', $post->id)}}">{{$post->id}} {{$post->title}}</a>
    </div>
  @endforeach
@endsection
