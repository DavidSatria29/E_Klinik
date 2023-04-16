@extends('layouts.master')
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <h1>Tambah Artikel</h1>
            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('article.store') }}" method="POST">
                @csrf
            <div class="form-group mt-2">
                <label for="image_path">image_path</label>
                <input type="text" class="form-control @error('image_path') is-invalid @enderror" id="image_path" name="image_path" value="{{ old('image_path') }}">
                @error('image_path')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="title">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="content">content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3" name="content"></textarea>
                @error('content')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-2">Daftar</button>
            </form>
        </div>
    </div>
</div>
@endsection
