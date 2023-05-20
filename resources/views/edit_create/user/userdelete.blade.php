@extends('layouts.adminmaster')
@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  </style>
@section('title', 'Data User')
@section('User', 'active')
<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Edit User</h1>
        <hr>
        <form action="{{ route('user.delete',['user' => $user]) }}" method="POST">
          @method('DELETE')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" name="name" value="{{ old('name') ?? $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">email</label>
            <input type="email"
            class="form-control @error('email') is-invalid @enderror"
            id="email" name="email" value="{{ old('email') ?? $user->email }}">
          </div>

          <div class="form-group">
            <label for="nomor">nomor</label>
            <input type="number"
            class="form-control @error('nomor') is-invalid @enderror"
            id="nomor" name="nomor" value="{{ old('nomor') ?? $user->nomor }}">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3"
            name="alamat">{{ old('alamat') ?? $user->alamat}}</textarea>
          </div>
          
          <button type="submit" class="btn btn-danger mb-2 mt-1">Delete</button>
          <a href="{{ route('admin') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
        </form>
  
      </div>
    </div>
</div>
@endsection

