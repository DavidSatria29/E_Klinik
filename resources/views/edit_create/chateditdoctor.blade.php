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
      <div class="col-md-8 col-xl-6">
        <h1>Edit User</h1>
        <hr>
        <form action="{{ route('chat.updatedoctor',['chat' => $chat->name]) }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" name="name" value="{{ old('name') ?? $chat->name }}">
          </div>

          <div class="form-group">
            <label for="question">question</label>
            <textarea class="form-control" id="question" rows="3"
            name="question">{{ old('question') ?? $chat->question}}</textarea>
          </div>

          <div class="form-group">
            <label for="answer">answer</label>
            <input type="text"
            class="form-control @error('answer') is-invalid @enderror"
            id="answer" name="answer" value="{{ old('answer') ?? $chat->answer }}">
          </div>

          <div class="form-group">
            <label for="name_doctor">namadokter</label>
            <input type="text"
            class="form-control @error('name_doctor') is-invalid @enderror"
            id="name_doctor" name="name_doctor" value="{{ old('name_doctor') ?? $chat->name_doctor }}">
          </div>

          <button type="submit" class="btn btn-primary mb-2 mt-1">Update</button>
          <a href="{{ route('admin') }}" class="btn btn-warning">Kembali</a>

        </form>
  
      </div>
    </div>
</div>
@endsection

