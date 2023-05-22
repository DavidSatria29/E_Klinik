@extends('layouts.master')
@section('title', 'Info Artikel')
@section('chatShow', 'active')
<style>
  .container-deskripsi{
    margin-top: 1cm;
    padding: 0;
    min-height: 100vh;
  }
</style>
@section('content')
<div class="container container-deskripsi mt-3">
    <div class="card">
        <div class="card-header text-center">
            Chat Dokter
        </div>
        @if ($chat)
        <div class="card-body">
            <div class="row">
                <div class="col-2 text-md-start">Nama</div>
                <div class="col-1">:</div>
                <div class="col-4 col-sm-9">{{ $chat->name }}</div>
                <div class="col-2 text-md-start">Email</div>
                <div class="col-1">:</div>
                <div class="col-4 col-sm-9">{{ $chat->email }}</div>
                <div class="col-2 text-md-start">Pertanyaan</div>
                <div class="col-1">:</div>
                <div class="col-4 col-sm-9">{{ $chat->question }}</div>
                <div class="col-2 text-md-start">Jawaban</div>
                <div class="col-1">:</div>
                <div class="col-4 col-sm-9">{{ $chat->answer }}</div>
                <div class="col-2 text-md-start">Dijawab oleh</div>
                <div class="col-1">:</div>
                <div class="col-4 col-sm-9">{{ $chat->name_doctor }}</div>
            </div>
        @else
            <div class="card-body">
                <p>Anda belum Chat dengan Dokter</p>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ route('chat') }}" class="btn btn-primary"> Chat Dokter</a>
        </div>
    @endif
    </div>
</div>
</div>
@endsection