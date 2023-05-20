@extends('layouts.adminmaster')
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
            <h1>Tambah Deskripsi Penyakit</h1>
            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('penyakit.store') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="nama_penyakit">nama_penyakit</label>
                    <input type="text" class="form-control @error('nama_penyakit') is-invalid @enderror" id="nama_penyakit" name="nama_penyakit" value="{{ old('nama_penyakit') }}">
                    @error('nama_penyakit')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="icon">icon</label>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon') }}">
                    @error('icon')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            <div class="form-group mt-2">
                <label for="deskripsi">deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3" name="deskripsi"></textarea>
                @error('deskripsi')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="jurnal_referensi">jurnal_referensi</label>
                <textarea class="form-control @error('jurnal_referensi') is-invalid @enderror" id="jurnal_referensi" rows="3" name="jurnal_referensi"></textarea>
                @error('jurnal_referensi')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-1 mb-2">Tambah</button>
            @if(auth()->check())
                @if(auth()->user()->role == 'admin')
                <a href="{{ route('adminpenyakit') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
                @elseif(auth()->user()->role == 'doctor')
                <a href="{{ route('doctor') }}" class="btn btn-warning mb-2 mt-1 ms-1">Kembali</a>
                @endif
            @endif

            </form>
        </div>
    </div>
</div>
@endsection
