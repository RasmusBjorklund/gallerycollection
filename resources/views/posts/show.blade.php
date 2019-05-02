@extends('layouts.app')

@section('content')
  <a class="btn btn-primary" href="/posts">Go Back</a>
  <h1 class="mt-5">{{$post->title}}</h1>
  <img style="width:25vw; height:auto;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
  <br><br>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>
  @if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)

    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
  @endif
@endsection
