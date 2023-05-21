@extends('layouts.master')
<style>
  .footer{
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>
@section('content')
<div class="container container-user mt-3">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">{{ $deskripsi->nama_penyakit }}</h5>
        <hr>
        <p class="card-text">{!! $deskripsi->deskripsi !!}</p>
        <hr>
        <p class="card-text">Jurnal Referensi : {!! $deskripsi->jurnal_referensi !!}</p>
    </div>
    </div>
</div>
@endsection