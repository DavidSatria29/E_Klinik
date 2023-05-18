@extends('layouts.navbarbaru')
<style>
  .container-user{
    margin-top: 3cm;
    padding: 0;
    min-height: 100vh;
  }
  .check{
    font-size: 12px;
  }
  </style>
@section('content')
<div class="container container-user">
  <div class="card">
    <div class="card-header text-center"> PILIH GEJALA YANG SESUAI</div>
    <div class="row px-2 mt-3">
      @foreach ($gejala as $hasil)
      <div class="col-6 col-sm-3 ">
        <div class="card mb-3 mx-auto justify-content-between" style="width: 10rem;">
          <h5 class="text-center">{{ $hasil->nama_gejala }}</h5>
          <div class="card-body">
            <div class="form-check">
              <form action="{{ route('CF.user') }}" method="POST">
                @csrf
                <input type="checkbox" class="form-check-input" value="{{ $hasil->kode_gejala }}" id="exampleCheck1" name="{{ $hasil->kode_gejala }}">
                <label class="form-check-label check" for="exampleCheck1">{{ $hasil->nama_gejala }}</label>
              </div>
            </div>
          </div>
        </div>
        {{-- @empty
        <td colspan="6" class="text-center">Tidak ada data...</td> --}}
        @endforeach
      </div>
      <div class="text-center mb-3">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </div>
    </form>
  </div>
</div>
@endsection