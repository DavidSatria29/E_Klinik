@extends('layouts.master')
@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  </style>
<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Edit contact</h1>
        <hr>
        <form action="{{ route('contact.delete',['contact' => $contact->name]) }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" name="name" value="{{ old('name') ?? $contact->name }}">
          </div>

          <div class="form-group">
            <label for="email">email</label>
            <input type="email"
            class="form-control @error('email') is-invalid @enderror"
            id="email" name="email" value="{{ old('email') ?? $contact->email }}">
          </div>

          <div class="form-group">
            <label for="message">message</label>
            <textarea class="form-control" id="message" rows="3"
            name="message">{{ old('message') ?? $contact->message}}</textarea>
          </div>
          
          <button type="submit" class="btn btn-danger mb-2 mt-1">Delete</button>
          <a href="{{ route('admin') }}" class="btn btn-warning">Kembali</a>
        </form>
  
      </div>
    </div>
</div>
@endsection

