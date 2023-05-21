@extends('layouts.doctormaster')
@section('content')
<style>
  #container-artikel{
    margin-top: 3cm;
  }
  </style>
  @section('title', 'Data Artikel')
  @section('penyakit', 'active')
<div class="container pt-4 bg-white" id="container-artikel">
    <div class="row">
      <div class="col-12">
        <h1>Delete Deskripsi Penyakit</h1>
        <hr>
        <form action="{{ route('penyakitdokter.destroy',['penyakit' => $penyakit]) }}" method="POST">
          @method('DELETE')
          @csrf
          <div class="form-group">
            <label for="nama_penyakit">nama_penyakit</label>
            <input type="text"
            class="form-control @error('image') is-invalid @enderror"
            id="nama_penyakit" name="nama_penyakit" value="{{ old('nama_penyakit') ?? $penyakit->nama_penyakit }}">
          </div>

          <div class="form-group">
            <label for="icon">icon</label>
            <input type="text"
            class="form-control @error('icon') is-invalid @enderror"
            id="icon" name="icon" value="{{ old('icon') ?? $penyakit->icon }}">
          </div>

          <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3"
            name="deskripsi">{{ old('deskripsi') ?? $penyakit->deskripsi}}</textarea>
          </div>

          <div class="form-group">
            <label for="jurnal_referensi">jurnal_referensi</label>
            <textarea class="form-control" id="jurnal_referensi" rows="3"
            name="jurnal_referensi">{{ old('jurnal_referensi') ?? $penyakit->jurnal_referensi}}</textarea>
          </div>

          <button type="submit" class="btn btn-danger mb-2 mt-1">Delete</button>
          @if(auth()->check())
            @if(auth()->user()->role == 'admin')
            <a href="{{ route('adminpenyakit') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
            @elseif(auth()->user()->role == 'doctor')
            <a href="{{ route('doctorpenyakit') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
            @endif
          @endif
        </form>

      </div>
    </div>
</div>
@endsection

