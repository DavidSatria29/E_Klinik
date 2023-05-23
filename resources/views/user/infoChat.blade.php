@extends('layouts.master')
@section('title', 'Info Artikel')
@section('chatShow', 'active')
<style>
  .container-deskripsi{
    margin-top: 1cm;
    padding: 0;
    min-height: 70vh;
  }
</style>
@section('content')
<div class="container container-deskripsi mt-3">
    <h4 class="text-center"> Chat Dokter</h4>
    @forelse ($chat as $chats)
        <div class="card mb-3">
            <div class="card-header text-center">
                pertanyaan ke {{ $loop->iteration }}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2 text-md-start">Pertanyaan</div>
                    <div class="col-1">:</div>
                    <div class="col-4 col-sm-9">{{ $chats->question }}</div>
                    <div class="col-2 text-md-start">Jawaban</div>
                    <div class="col-1">:</div>
                    <div class="col-4 col-sm-9">{{ $chats->answer }}</div>
                    <div class="col-2 text-md-start">Dijawab oleh</div>
                    <div class="col-1">:</div>
                    <div class="col-4 col-sm-9">{{ $chats->name_doctor }}</div>
                </div>
            </div>
        </div>
    @empty
        <div class="card">
            <div class="card-body">
                <p>Anda belum Chat dengan Dokter</p>
            </div>
        </div>
    @endforelse

    <div class="text-center mt-3">
        <a href="{{ route('chat') }}" class="btn btn-primary"> Chat Dokter</a>
    </div>
</div>

@endsection