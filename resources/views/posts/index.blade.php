@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if (Auth::user())
    <hr>
    <a href="/posts/create" class="btn btn-primary">Create Post</a>
    <hr>
  @endif
  @if ($posts->count() > 0)
    <div class="row posts-table">
    @foreach ($posts as $post)
        <div class="col-md-4 col-sm-4">
          <div class="card mb-3">
            <img class="card-img-top" style="width:100%;height: 15em;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            <div class="card-body">
              <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <small class="card-text">Written on {{$post->created_at}} <br> by {{$post->user->name}}</small>
            </div>
          </div>
        </div>
    @endforeach
  </div>
    {{$posts->links()}}
    @else
      <p>No posts found</p>
  @endif
@endsection
