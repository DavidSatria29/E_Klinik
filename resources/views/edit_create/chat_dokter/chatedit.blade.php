@extends('layouts.adminmaster')

@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  </style>
@section('title', 'Data Chat Dokter')
@section('Chat', 'active')
<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Edit Chat dokter</h1>
        <hr>
        <form action="{{ route('chat.update',['chat' => $chat->name]) }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name" name="name" value="{{ old('name') ?? $chat->name }}">
          </div>
          <div class="form-group">
            <label for="name">Email</label>
            <input type="email"
            class="form-control @error('name') is-invalid @enderror"
            id="name" name="email" value="{{ old('email') ?? $chat->email }}">
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
          @if(auth()->check())
            @if(auth()->user()->role == 'admin')
              <a href="{{ route('admin') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
            @elseif(auth()->user()->role == 'doctor')
              <a href="{{ route('doctor') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
            @endif
          @endif
        

        </form>
  
      </div>
    </div>
</div>
@endsection

