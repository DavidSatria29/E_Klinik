@extends('layouts.master')
<style>
  .container-user{
    margin-top: 3cm;
  }
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container container-user">
    <div class="card" style="">
    <img src="{{ asset($article->image_path )}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->content }}</p>
    </div>
    </div>
</div>
@endsection