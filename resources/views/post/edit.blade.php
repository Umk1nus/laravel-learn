@extends('layouts.index')
@section('content')
<form action="{{route('posts.update', $post->id)}}" method="post">
  @csrf
  @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" name="content" id="content" placeholder="Content">{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
  </div>
  {{-- <div class="mb-3">
    <label for="likes" class="form-label">Likes</label>
    <input type="number" class="form-control" id="likes" placeholder="Likes">
  </div> --}}
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection