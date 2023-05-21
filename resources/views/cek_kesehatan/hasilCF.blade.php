@extends('layouts.navbarbaru')
@section('title', 'Hasil')
@section('cek', 'active')
<style>
  .container-hasil{
    margin-top: 1cm;
    padding: 0;
    min-height: 100vh;
  }
  .font{
    font-size: 12px;
  }
</style>
@section('content')
@section('title', 'Cek Kesehatan')
@section('cek', 'active')
<div class="container container-hasil ">
  <div class="card">
    <div class="card-header text-center"> Hasil Diagnosa</div>
    <div class="row mt-3">
      @forelse ($nama_penyakit as $index => $nama)
      <div class="col-6 col-sm-4 ">
        <div class="card mb-3 mx-auto justify-content-center" style="width: 20rem;">
          <p class="text-center">{{ $nama }}</p>
          <hr class="mb-0 mt-0">
          <div class="card-body">
            <div class="mt-0 mb-0">
              <p class="text-center">Nilai CF : {{ $hasil[$index] }}</p>
            </div>
            <hr class="mb-0 mt-0">
            <div class="justify-content-center">
              <p class="text-center font"> Saran Pencegahan</p>
              <ol>
                @foreach ($saran_pencegahan[$index] as $saran_p)
                  <li class="font">{{ $saran_p }}</li>
                @endforeach
              </ol>
            </div>
            <hr class="mb-0 mt-0">
            <div class="justify-content-center">
              <p class="text-center font"> Saran Obat</p>
              <ol>
                @foreach ($saran_obat[$index] as $saran_o)
                  <li class="font">{{ $saran_o }}</li>
                @endforeach
              </ol>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p class="text-center">Gejala kurang 30 %, Selalu tetap waspada dan jaga kesehatan</p>
      @endforelse
    </div>
  </div>
</div>
@endsection