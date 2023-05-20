@extends('layouts.adminmaster')
@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  </style>
@section('title', 'Data Hubungi Kami')
@section('Contact', 'active')

<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Delete contact Us</h1>
        <hr>
        <form action="{{ route('contact.delete',['contact' => $contact]) }}" method="POST">
          @method('DELETE')
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
          <a href="{{ route('admin') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
        </form>
  
      </div>
    </div>
</div>
@endsection

