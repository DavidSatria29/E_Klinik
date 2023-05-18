@extends('layouts.adminmaster')
@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  </style>
  @section('title', 'Data Artikel')
  @section('Article', 'active')
<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Delete Artikel</h1>
        <hr>
        <form action="{{ route('article.destroy',['article' => $article->id]) }}" method="POST">
          @method('DELETE')
          @csrf
          <div class="form-group">
            <label for="image_path">Image_path</label>
            <input type="text"
            class="form-control @error('image') is-invalid @enderror"
            id="image_path" name="image_path" value="{{ old('image_path') ?? $article->image_path }}">
          </div>

          <div class="form-group">
            <label for="title">title</label>
            <input type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title" name="title" value="{{ old('title') ?? $article->title }}">
          </div>

          <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" id="content" rows="3"
            name="content">{{ old('content') ?? $article->content}}</textarea>
          </div>

          <button type="submit" class="btn btn-danger mb-2 mt-1">Delete</button>
          <a href="{{ route('admin') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
        </form>

      </div>
    </div>
</div>
@endsection

