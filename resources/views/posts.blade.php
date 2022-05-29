@extends('layouts.index')
@section('content')
  @foreach ( $posts as $post )
    <div>
      <h1>{{$post->title}}</h1>
      <p>{{$post->content}}</p>
    </div>  
  @endforeach
@endsection
