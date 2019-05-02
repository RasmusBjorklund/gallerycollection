@extends('layouts.app')

@section('content')
  <div class="header-cover"></div>
  <div class="header" style="background-image: url({{ asset( '/img/header.jpeg' ) }})"></div>
  <div class="header-content">
      <div class="row h-75 justify-content-center align-items-center">
          <div class="col-12 text-center">
              <h1>Gallery Collection</h1>
              <h4>For every photographer</h4>
          </div>
      </div>
  </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <h3 class="card-title text-center">Create</h3>
          <span class="icon text-center">
            <i class="fas fa-user-edit"></i>
          </span>
          <div class="card-body">
            <p>Create you own posts! Share your photographs and memories within them!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <h3 class="card-title text-center">Share</h3>
          <span class="icon text-center">
            <i class="fas fa-share-alt"></i>
          </span>
          <div class="card-body">
            <p>Simply upload you post and share with 100+ of photographs!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <h3 class="card-title text-center">Explore</h3>
          <span class="icon text-center">
            <i class="fas fa-globe"></i>
          </span>
          <div class="card-body">
            <p>Explore thousands of photos shared by members of this site! </p>
          </div>
        </div>
      </div>
    </div>
@endsection
