@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <p class="alert alert-success">Status: Logged in</p> --}}
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3 class="mt-3">Your Blog Posts</h3>
                    @if (count($posts) > 0)
                    <table class="table ">
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach ($posts->reverse() as $post)
                        <tr>
                          <td><img style="width:5vw;" src="/storage/cover_images/{{$post->cover_image}}" alt=""></td>
                          <td>{{$post->title}}</td>
                          <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
                          <td>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                          </td>
                        </tr>
                      @endforeach
                    </table>
                  @else
                    <p>You have no posts!</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
