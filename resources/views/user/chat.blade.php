@extends('layouts.master')
<style>
  .container-doctor{
  margin-top: 3cm;
  padding: 0;
  min-height: 100vh;
  }
</style>
@section('content')
@section('title', 'Chat Dokter')
@section('chat', 'active')
<div class="container container-doctor">
  <h1 class="text-center">Chat Dokter</h1>
    <div class="row mx-auto mt-2">
        <div class="col-12 bg-light rounded align-items-center">
          <form action="{{ route('chat.store') }}" method="POST">
            @csrf
            <div class="mt-5 mb-3 ms-2 me-2">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tulis nama lengkap anda" name="name">
            </div>
            <div class="mb-3 ms-2 me-2">
              <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat E-mail Anda" name="email">
            </div>
            <div class="mb-3 ms-2 me-2">
              <label for="exampleFormControlTextarea1" class="form-label">Pertanyaan</label>
              <textarea type="text" class="form-control" name="question" id="exampleFormControlTextarea1" rows="10" placeholder="Tulis pesan anda"></textarea>
            </div>
            <center>
              <div class="mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
</div>
@endsection