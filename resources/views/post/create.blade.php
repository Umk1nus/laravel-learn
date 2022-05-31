@extends('layouts.index')
@section('content')
  <form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" class="form-control" id="image" placeholder="Image">
    </div>
    {{-- <div class="mb-3">
      <label for="likes" class="form-label">Likes</label>
      <input type="number" class="form-control" id="likes" placeholder="Likes">
    </div> --}}
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
