@extends('layouts.master')
<style>
    .container-user{
      margin-top: 3cm;
    }
    </style>
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit User</h1>
        <hr>
        <form action="{{ route('user.delete',['user' => $user->name]) }}" method="POST">
          @method('PATCH')
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
          <a href="{{ route('admin') }}" class="btn btn-warning">Kembali</a>
        </form>
  
      </div>
    </div>
</div>
@endsection

