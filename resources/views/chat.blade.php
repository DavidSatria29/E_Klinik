@extends('layouts.master')
<style>
  .container-doctor{
    margin-top: 3cm;
  }
  </style>
@section('content')
<div class="container container-doctor">
    @if (session()->has('pesan'))
      <div class="alert alert-success">
        {{ session()->get('pesan') }}
      </div>
    @endif
    <div class="row mx-auto mt-5">
        <div class="col-lg-12">
          <form action="{{ route('chat.store') }}" method="POST">
            @csrf
            <div class="mt-5 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tulis nama lengkap anda" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat E-mail Anda" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pertanyaan</label>
              <textarea type="text" class="form-control" name="question" id="exampleFormControlTextarea1" rows="10" placeholder="Tulis pesan anda"></textarea>
            </div>
            <center>
              <div class="mb-5 ">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
</div>
@endsection