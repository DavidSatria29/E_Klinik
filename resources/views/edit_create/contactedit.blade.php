@extends('layouts.master')
<style>
    .container-contact{
      margin-top: 3cm;
    }
    </style>
@section('content')
<div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit Contact</h1>
        <hr>
        <form action="{{ route('contact.update',['contact' => $contact->name]) }}" method="POST">
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
          <button type="submit" class="btn btn-primary mb-2 mt-1">Update</button>
        </form>
  
      </div>
    </div>
</div>
@endsection

