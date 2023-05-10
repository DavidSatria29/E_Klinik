@extends('layouts.master')
<style>
  .container-hasil{
    margin-top: 3cm;
  }
  .font{
    font-size: 12px;
  }
</style>
@section('content')
<div class="container container-hasil">
  <div class="card">
    <div class="card-header text-center"> Hasil Diagnosa</div>
    <div class="row mt-3">
      @foreach ($nama_penyakit as $index => $nama)
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
      @endforeach
    </div>
  </div>
</div>
@endsection