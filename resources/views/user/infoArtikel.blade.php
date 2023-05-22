@extends('layouts.master')
@section('title', 'Artikel')
@section('content')
<div class="container container-user mt-3">
    <div class="card">
    <img  src="{{ asset('asset/img/artikel/'.$article->image_path) }}"width="300px" height="300px" alt="tidak ada foto" class="mx-auto mt-2">
    <div class="card-body">
        <h5 class="card-title text-center">{{ $article->title }}</h5>
        <p class="card-text">{!! $article->content !!}</p>
    </div>
    </div>
</div>
@endsection